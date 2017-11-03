<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResidentController extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->library('parser');
            $this->load->helper('url');
        }
	
        public function question(){
            $topic = "Safety and security";
            $question= "I feel my possessions are secure";
            
            $data=array(
                "topic" => $topic,
                "question" => $question
            );
            $this->parser->parse('questionpage', $data);
            
          
        } 
}
