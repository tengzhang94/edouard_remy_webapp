<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class caregiverController extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->library('parser');
            $this->load->helper('url');
        }
	public function login()
	{
            $this->load->view('login');
	}
        
        public function test()
        {
            $this->load->model('Event_model');
            $results['caregiver']= $this->Event_model->getEvents();
            
            $content = $this->parser->parse('content_test', $results, true);
        
            $data = array(
                "content" => $content
            );
        
            $this->parser->parse('testpage', $data);
        }
        
        public function insert()
        {
            $this->load->model('Event_model');
            $content = $this->parser->parse('content_test', $results, true);
            
            
            
            $results['caregiver']= $this->Event_model->insertCaregiver();
        }
        
        public function click()
       {
          
            $username= $this->input->post('user');
            $password= $this->input->post('password');
          //Giani	Driesen


              $this->load->model('Event_model');
              $result=$this->Event_model->login($username,$password);
      

            $this->load->view('testpage');
            if($result)
            {
                redirect('residentController/question');
            }
            else
            {
                $this->login();
            }
        }
}
