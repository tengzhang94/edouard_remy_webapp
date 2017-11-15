<?php

class Question_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getQuestions($topicId) {
        $questionLang = $this->session->questionLang; //get the right columnname for the language
        $topicLang = $this->session->topicLang; //get the right columnname for the language
        //get the questions and store them temporarily in session
        $questions = $this->db->query("SELECT questionOrder, $questionLang AS questionString FROM Questions WHERE topicId='$topicId'");
        $this->session->set_userdata('topicQuestions', $questions->result());   //get all questins of current topic and store them in session
        //get the topic name and store it temporarily in session
        $topicName = $this->db->query("SELECT $topicLang AS topicName FROM Topics WHERE idTopic ='$topicId'");
        $this->session->set_userdata('topicName', $topicName->result()[0]->topicName);
    }
    
    public function getTopics(){
        $topicLang = $this->session->topicLang; //get the right columnname for the language
        $query = $this->db->query("SELECT idTopic, $topicLang AS topicName FROM Topics");
        return $query->result_array();
    }
}
