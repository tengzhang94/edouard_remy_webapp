<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ResidentController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->helper('url');
    }

    public function question($questionNr) {
        $this->load->model('Question_model');
        
        if(!isset($this->session->topicQuestions)) {
            $this->Question_model->getQuestions($this->session->topicId);
        }
        
        if (!empty($this->session->topicQuestions [$questionNr])) {
            $question = $this->session->topicQuestions[$questionNr]->questionString;
        } else {
            //redirect to 'end of topic' page
            redirect('CaregiverController/login');
            $this->session->unset_userdata('topicQuestions');
            $this->session->unset_userdata('topicId');
            $this->session->unset_userdata('questionNr');
            $this->session->unset_userdata('topicName');
        }
        
        $topic = $this->session->topicName;
        
        //put the question and topic title in array, then parse data
        $data = array(
            "topic" => $topic,
            "question" => $question
        );
        $this->parser->parse('questionpage', $data);
    }

}
