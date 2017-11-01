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
            
            $content = $this->parser->parse('test', $results, true);
        
            $data = array(
                "content" => $content
            );
        
        $this->parser->parse('testpage', $data);
        }
        
        
        
        
}
