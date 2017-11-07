<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ResidentController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->helper('url');
    }

    public function question() {
        $this->load->model('Question_model');
        $this->session->set_userdata('topicQuestions', $this->Question_model->getQuestions($this->session->topicId));   //get all questins of current topic and store them in session

        $topic = "Safety and security";        
        
        //get the current question for the user
        if(!empty($this->session->topicQuestions [$this->session->question])) {
            $question = $this->session->topicQuestions[$this->session->question]->questionString;
        }
        else {
            //redirect to 'end of topic' page
            $question = "Error: no question found";
        }
        
        //put the question and topic title in array, then parse data
        $data = array(
            "topic" => $topic,
            "question" => $question
        );
        $this->parser->parse('questionpage', $data);
    }

}
