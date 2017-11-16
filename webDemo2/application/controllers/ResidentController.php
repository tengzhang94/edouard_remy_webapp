<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ResidentController extends CI_Controller {
    
    private $language;
    
    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        switch($this->session->dutch){
            case 1:
                $this->language = 'dutch';
                break;
            case 0:
                $this->language = 'english';
                break;
            default:
                $this->language = 'dutch';
                break;
        }
        $this->lang->load('ResidentNav_lang', $this->language);
    }

    public function question($questionNr) {
        $this->load->model('Question_model');
        
        if($questionNr == 0){
            if(isset($_POST["idTopic"])){
                $this->session->set_userdata('topicId', $_POST['idTopic']);
            }
            else{
                $this->session->set_userdata('topicId', 1);
            }
        }
        
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
        
        //put the question and topic title in array, then parse data
        $data = array(
            "topic" => $topic,
            "question" => $question,
            "hiddenQuestionNr" => $hiddenQuestionNr
        );
        $this->parser->parse('questionpage', $data);
    }

    public function topics(){
        $this->load->model('Question_model');
        $topics = $this->Question_model->getTopics();
        $topicsChunks = array_chunk($topics, 4, true); //divide the query result in chunks of 4
        $htmlString = '';
        foreach($topicsChunks as $topicRow){
            $templateData = array(
                'paragraph' => $topicRow
            );
            $tempString = $this->parser->parse('topicTemplate', $templateData, true);
            $htmlString .= $tempString; 
        }
        
        $data = array(
            "topicButtons" => $htmlString
        );
        
        $this->parser->parse('topicpageTest', $data);
    }
    
    public function test(){
        $this->load->view('resident_topicpage');
    }
    
    public function end(){
        $this->lang->load('ResidentQuestionEndpage_lang', $this->language);
        $data = array(
            'font_size' => lang('res_navbar_font_size'),
            'greater' => lang('res_navbar_bigger_font'),
            'smaller' => lang('res_navbar_smaller_font'),
            'yes' => lang('res_question_end_yes'),
            'no' => lang('res_question_end_no'),
            'content' => lang('res_question_end_content')
        );
        $this->parser->parse('question_endpage', $data);
    }
}
