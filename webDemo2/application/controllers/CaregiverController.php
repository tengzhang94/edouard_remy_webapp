<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CaregiverController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->helper('url');
        $this->load->model('Menu_model');
        $this->load->model('Language_model');
    }

    public function login() {
        //unset all self-made session variables
        $sessiondata = $this->session->all_userdata();
        foreach ($sessiondata as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }

        $data = $this->Language_model->getCareLoginLanguage();
        $this->parser->parse('login_new', $data);
    }

    public function home() {
        $this->load->model('Dashboard_model');
        $result = $this->Dashboard_model->getMessages(); //Message rows from database for the sectors this caregiver monitors
        //Create array of arrays to fill {messages} in dashDemo.php
        $messages = array();
        for ($i = 0; $i < 4; $i++) {
            $temp = array('messageText' => $result[$i]['messageText']);
            array_push($messages, $temp);
        }

        //Parse the html document
        $data = array('messages' => $messages);
        //$this->parser->parse('dashDemo', $data);
        //$this->parser->parse();
        //$this->load->view('dashDemo');

        $data['title'] = 'Homepage';    //Fill in title for the page
        $data['menu'] = $this->Menu_model->get_menuitems('Homepage');   //Get all the menu items and set the right one as active
        $data['navbar_topbar'] = $this->parser->parse('navbar_topbar', $data, true);    //Fill in the title and menu items in the HTML code
        $this->parser->parse('dashDemo', $data);    //Parse everything and display
    }

    public function settings() {
        $navbar_topbar['title'] = 'Settings';
        $navbar_topbar['menu'] = $this->Menu_model->get_menuitems('Settings');
        $navbar_topbar['navbar_topbar'] = $this->parser->parse('navbar_topbar', $navbar_topbar, true);
        $this->parser->parse('settings', $navbar_topbar);
    }

    public function selectTopic() {
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
            if ($this->session->dutch == 1) {
                $this->session->set_userdata('questionLang', 'qDutch');
                $this->session->set_userdata('topicLang', 'topicDutch');
            } else {
                $this->session->set_userdata('questionLang', 'qEnglish');
                $this->session->set_userdata('topicLang', 'topicEnglish');
            }
            $this->session->set_userdata('name', $result[0]->firstName);
            $this->session->set_userdata('idCaregiver', $result[0]->idCaregiver);
            //$this->session->set_userdata('topicId', 1); //current topic ID
            //$this->session->set_userdata('questionNr', 0);    //question within current topic

            //redirect('ResidentController/question/0');
            redirect('CaregiverController/home');
        } else {
            redirect('CaregiverController/login');
        }
    }

}
