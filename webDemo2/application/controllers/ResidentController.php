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
        if(!isset($this->session->topicQuestions)) {
            $this->Question_model->getQuestions($this->session->topicId);
        }

        $topic = "Safety and security";

        //get the current question for the user
        if (!empty($this->session->topicQuestions [$this->session->questionNr])) {
            $question = $this->session->topicQuestions[$this->session->questionNr]->questionString;            
        } else {
            //redirect to 'end of topic' page
            redirect('CaregiverController/login');
            $this->session->unset_userdata('topicQuestions');
            $this->session->unset_userdata('topicId');
            $this->session->unset_userdata('questionNr');
        }
        

        //put the question and topic title in array, then parse data
        $data = array(
            "topic" => $topic,
            "question" => $question
        );
        $this->parser->parse('questionpage', $data);
    }

}
