<?php

class Question_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getQuestions($topicId) {
        //$dutch = $this->session->userdata('dutch');        
        //$questions = $this->db->query("select questionString from Questions where topicId='$topicId' And  dutch= '$dutch'");
        $questions = $this->db->query("select questionString from Questions where topicId='$topicId' And  dutch= '1'");
        
        return $questions->result();
    }
}
