<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CaregiverController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('Menu_model');
        $this->load->model('Language_model');
    }

    public function login() {
        $this->load->model('Event_model');
        $data = $this->Language_model->getCareLoginLanguage();
        $username = $this->input->post('user');
        $password = $this->input->post('password');
        $data['login_fail'] = '';

        //unset all self-made session variables
        $sessiondata = $this->session->all_userdata();
        foreach ($sessiondata as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }

        $this->form_validation->set_rules('user', 'lang:username', 'trim|required', array('required' => 'Voer een %s in'));
        $this->form_validation->set_rules('password', 'lang:password', 'trim|required', array('required' => 'Voer een %s in'));

        if ($this->form_validation->run() == FALSE) {
            $this->parser->parse('login_new', $data);
        } else {
            $result = $this->Event_model->login($username, $password);

            if ($result) {
                $this->session->set_userdata('logged_in', 'caregiver');
                $this->session->set_userdata('dutch', $result[0]->dutch);
                $this->Language_model->setSessionLanguage();
                $this->session->set_userdata('name', $result[0]->firstName);
                $this->session->set_userdata('idCaregiver', $result[0]->idCaregiver);
                redirect('CaregiverController/home');
            } else {
                $data['login_fail'] = 'Inloggegevens incorrect';
                $this->parser->parse('login_new', $data);
            }
        }
    }

    public function home() {
        $this->load->model('Dashboard_model');
        $result = $this->Dashboard_model->getMessages(); //Message rows from database for the sectors this caregiver monitors        
        $messages = array(); //Create array of arrays to fill {messages} in dashDemo.php
        for ($i = 0; $i < 4; $i++) {
            $temp = array('messageText' => $result[$i]['messageText']);
            array_push($messages, $temp);
        }

        //Parse the html document
        $data = array('messages' => $messages);

        $data['title'] = 'Homepage';    //Fill in title for the page
        $data['menu'] = $this->Menu_model->get_menuitems('Homepage');   //Get all the menu items and set the right one as active        
        $data['content'] = $this->parser->parse('dashDemo', $data, true);   //parse messages into dashboard page
        $this->parser->parse('navbar_topbar', $data);    //Parse everything and display
    }

    public function settings() {
        $data['title'] = 'Settings';
        $data['menu'] = $this->Menu_model->get_menuitems('Settings');
        $data['content'] = $this->parser->parse('settings', $data, true);
        $this->parser->parse('navbar_topbar', $data);
    }

    public function selectTopic() {
        redirect('ResidentController/Topics');
    }

    public function insert() {
        $this->load->model('Event_model');
        $content = $this->parser->parse('content_test', $results, true);
        $results['caregiver'] = $this->Event_model->insertCaregiver();
    }

    public function addResident() {
        $this->load->model('AddResident_model');

        $data['title'] = 'Resident';
        $data['menu'] = $this->Menu_model->get_menuitems('Resident');
        $data['content'] = $this->parser->parse('AddResident', $data, true);

        $firstName = $this->input->post('firstName');
        $lastName = $this->input->post('lastName');
        $birthDate = $this->input->post('birthDate');
        $gender = $this->input->post('gender');
        $married = $this->input->post('married');
        $children = $this->input->post('children');
        $other = $this->input->post('other');

        //$this->form_validation->set_rules('firstName', 'First name', 'trim|required', array('required' => 'Fill in %s'));
        //$this->form_validation->set_rules('lastName', 'Last name', 'trim|required', array('required' => 'Fill in %s'));        

        if ($this->input->post('firstName') == NULL) { //TODO: Must be replaced by form validation
            $data['success'] = "";
            $this->parser->parse('navbar_topbar', $data);
        } else {
            if ($this->AddResident_model->checkExist($firstName, $lastName, $birthDate, $gender) == false) {
                $this->AddResident_model->addInfoResident($firstName, $lastName, $birthDate, $gender, $married, $children, $other);
                $data['success'] = "Success!";
                $this->parser->parse('navbar_topbar', $data);
            } else {
                $data['success'] = "This resident already exists!";
                $this->parser->parse('navbar_topbar', $data);
            }
        }
    }

    public function resident() {
        $this->load->model('Residentpage_model');
        $data['residents'] = $this->Residentpage_model->getAllResidents();
        $data['title'] = 'Resident';
        $data['menu'] = $this->Menu_model->get_menuitems('Resident');
        $this->parser->parse('residents_overview', $data);
    }
    
    public function residentIndividual() {
        $this->load->model('Residentpage_model');
        $resident_id = $this->input->post("resident_id");
        $resident = $this->Residentpage_model->getResidentWithId($resident_id);
        $data['firstName'] = $resident->firstName;
        $data['lastName'] = $resident->lastName;
        $sector = $this->Residentpage_model->getSectorWithId($resident->Sectors_idSector);
        if(isset($sector)) $data['sector'] = $sector->name;
        else $data['sector'] = "not set";        
        $data['gender'] = $resident->gender;
        if (isset($resident->photo)) $data['photo'] = $resident->photo;
        else $data['photo'] = base_url()."assets/css/image/icons8-customer-50.png";
        if(isset($resident->roomNr)) $data['roomNr'] = $resident->roomNr;
        else $data['roomNr'] = "not set";        
        $data['birthday'] = $resident->birthDate;
        $data['language'] = $resident->dutch ? "Dutch" : "English";
        $data['married'] = $resident->married ? "yes" : "no";
        $data['children'] = $resident->children;
        $data['notes'] = $this->Residentpage_model->getResidentNotes($resident_id);
        
        $data['title'] = 'Resident';
        $data['menu'] = $this->Menu_model->get_menuitems('Resident');
        $data['content'] = $this->parser->parse('residentIndividual', $data, true);
        $this->parser->parse('navbar_topbar', $data);
    }
    
    public function getPersonalInformation() {
        $this->load->model('Event_model');
        
                $result= $this->Event_model->getPersonalInformation();
                if($result[0]['dutch']=='1')
                {
                   $data['content']='Dutch';
                }
        else
        {
            $data['content']='English';
        }

        $this->parser->parse('testpage', $data);
    }

    public function changePersonalInformation() {

    $language = $this->input->post('language');
    $this->load->model('Event_model');
    $this->Event_model->changePersonalInformation($language);

    }
    
    public function sectorOverview(){
        $this->load->model('Sector_model');
        $sectors = $this->Sector_model->getAllSectorInfos();
        
        $sectorData = array(
            "sectors" => $sectors,
            "addSector" => "Add a sector" //replace with language model info
        );
        
        $data['title'] = 'Sectors';
        $data['menu'] = $this->Menu_model->get_menuitems('Settings');
        $data["content"] = $this->parser->parse('sectors_overview', $sectorData, true);
        $this->parser->parse('navbar_topbar', $data);
        
    }

}
