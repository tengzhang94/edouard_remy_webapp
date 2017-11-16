<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CaregiverController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->helper('url');
        $this->load->model('Menu_model');
    }

    public function login() {
        $this->load->view('login');
    }
    
    public function home() {
        $navbar_topbar['title'] = 'Homepage';
        $navbar_topbar['menu'] = $this->Menu_model->get_menuitems('Homepage');
        $navbar_topbar['navbar_topbar'] = $this->parser->parse('navbar_topbar', $navbar_topbar, true);
        $this->parser->parse('dashDemo', $navbar_topbar);
    }
    
    public function settings() {
        $navbar_topbar['title'] = 'Settings';
        $navbar_topbar['menu'] = $this->Menu_model->get_menuitems('Settings');
        $navbar_topbar['code'] = $this->parser->parse('navbar_topbar', $navbar_topbar, true);
        $this->parser->parse('settings', $navbar_topbar);        
    }
    
    public function selectTopic(){
        redirect('ResidentController/Topics');
    }

    public function test() {
        $this->load->model('Event_model');
        $results['caregiver'] = $this->Event_model->getEvents();

        $content = $this->parser->parse('content_test', $results, true);

        $data = array(
            "content" => $content
        );

        $this->parser->parse('testpage', $data);
    }

    public function insert() {
        $this->load->model('Event_model');
        $content = $this->parser->parse('content_test', $results, true);



        $results['caregiver'] = $this->Event_model->insertCaregiver();
    }

    public function click() {

        $username = $this->input->post('user');
        $password = $this->input->post('password');
        //Giani	Driesen


        $this->load->model('Event_model');
        $result = $this->Event_model->login($username, $password);


        //$this->load->view('testpage');
        if ($result) {
            $this->session->set_userdata('logged_in', 'caregiver');
            $this->session->set_userdata('dutch', $result[0]->dutch);
            if($this->session->dutch == 1){
                $this->session->set_userdata('questionLang', 'qDutch');
                $this->session->set_userdata('topicLang', 'topicDutch');
            }
            else{
                $this->session->set_userdata('questionLang', 'qEnglish');
                $this->session->set_userdata('topicLang', 'topicDutch');
            }
            $this->session->set_userdata('name', $result[0]->firstName);
            $this->session->set_userdata('idCaregiver', $result[0]->idCaregiver);
            $this->session->set_userdata('topicId', 1); //current topic ID
            //$this->session->set_userdata('questionNr', 0);    //question within current topic

            //redirect('ResidentController/question/0');
            $this->home();
        } else {
            $this->login();
        }
    }

}
