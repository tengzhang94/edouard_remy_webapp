<?php

class Question_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getQuestions($topicId) {
        $dutch = $this->session->dutch;        
        $questions = $this->db->query("select questionString,idQuestions from Questions where topicId='$topicId' And  dutch= '$dutch'");
        $this->session->set_userdata('topicQuestions', $questions->result());   //get all questins of current topic and store them in session
    }
}
