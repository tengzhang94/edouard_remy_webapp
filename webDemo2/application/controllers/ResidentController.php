<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ResidentController extends CI_Controller {
    
    private $language;
    private $navLanArray;
    
    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->model('Language_model');
        $this->navLanArray = $this->Language_model->getResNavLanguage();
    }
    
    public function question($questionNr) {
        $this->load->model('Question_model');
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $topicId = (int)array_keys(filter_input_array(INPUT_POST))[0];
            if(isset($topicId)){
                $this->session->unset_userdata('topicQuestions');
                $this->session->unset_userdata('topicName');
                $this->session->set_userdata('topicId', $topicId);
            }
        }
        //$topicId = filter_input(INPUT_POST, 'idTopic');
        
        
        if(!isset($this->session->topicQuestions)) {
            $this->Question_model->getQuestions($this->session->topicId);
        }
        
        if (!empty($this->session->topicQuestions [$questionNr])) {
            $question = $this->session->topicQuestions[$questionNr]->questionString;
        } else {
            //redirect to 'end of topic' page
            //redirect('CaregiverController/login');
            $this->session->unset_userdata('topicQuestions');
            $this->session->unset_userdata('topicId');
            $this->session->unset_userdata('topicName');
            //$this->session->set_userdata('topicId', $this->session->topicId + 1);
            redirect('ResidentController/end');
        }
        
        $topic = $this->session->topicName;
        
        $nextQuestionNr = $questionNr + 1;
        
        //workaround to create new input field in view which passes value to javascript file
        $hiddenQuestionNr = array(
            "value" => $nextQuestionNr,
            "id" => "hiddenQuestionNr",
            "type" => "hidden"
        );
        
        $this->lang->load('ResidentQuestion_lang', $this->language);
        //put the question and topic title in array, then parse data
        $data = array_merge(array(
            "topic" => $topic,
            "question" => $question,
            "hiddenQuestionNr" => $hiddenQuestionNr
                ),
                $this->navLanArray,
                $this->Language_model->getResQuestionLanguage()
                );
        $this->parser->parse('questionpage_new', $data);
    }

    public function topics(){
        $this->load->model('Question_model');
        $topics = $this->Question_model->getTopics();
        $topicsChunks = array_chunk($topics, 4, true); //divide the query result in chunks of 4
        $htmlString = '';
        foreach($topicsChunks as $topicRow){
            $templateData = array_merge(array(
                'paragraph' => $topicRow
            ),$this->navLanArray);
            $tempString = $this->parser->parse('topicTemplate', $templateData, true);
            $htmlString .= $tempString; 
        }
        
        $data = array_merge(array(
            "topicButtons" => $htmlString
        ),$this->navLanArray);
        
        $this->parser->parse('topicpageTest', $data);
    }
    
    public function test(){
        $this->load->view('resident_topicpage');
    }
    
    public function end(){
        $this->lang->load('ResidentQuestionEndpage_lang', $this->language);
        $data = array_merge($this->Language_model->getResQuestionEndLanguage(),
        $this->navLanArray);
        $this->parser->parse('question_endpage', $data);
    }
    
    public function home(){
        $this->load->view('residentHome');
    }
    
  public function scan(){
        $this->load->model('Event_model');
        $data = array();
        if($this->input->server('REQUEST_METHOD') == 'POST'){
            $scanResult = $this->input->post('scans');
            $result = $this->Event_model->scan($scanResult);
            $data['result'] = $result;
        }
        else{
            $data['result'] = "no result yet";
        }
        
        $this->parser->parse('login_resident',$data);
//
//        if ($result) {  
//            redirect('ResidentController/scan');
//        } else {
//            redirect('ResidentController/scan');
//            
//        }
    }
    
}
