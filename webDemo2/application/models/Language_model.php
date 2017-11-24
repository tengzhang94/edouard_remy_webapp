<?php

/*
 * This model uses the language files to make it easier to parse them into the views
 */

class Language_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getLanguage() {
        $language;
        switch ($this->session->dutch) {
            case 1:
                $language = 'dutch';
                break;
            case 0:
                $language = 'english';
                break;
            default:
                $language = 'dutch';
                break;
        }
        return $language;
    }

    public function getResNavLanguage() {
        $this->lang->load('ResidentNav_lang', $this->getLanguage());
        return array(
            'font_size' => lang('res_navbar_font_size'),
            'greater' => lang('res_navbar_bigger_font'),
            'smaller' => lang('res_navbar_smaller_font'),
            'choose_topic' => lang('choose_topic'),
            'welcome' => lang('welcome')
        );
    }

    public function getResQuestionLanguage() {
        $this->lang->load('ResidentQuestion_lang', $this->getlanguage());
        return array(
            "verybad" => lang('verybad'),
            "bad" => lang('bad'),
            "ok" => lang('ok'),
            "good" => lang('good'),
            "verygood" => lang('verygood')
        );
    }

    public function getResQuestionEndLanguage() {
        $this->lang->load('ResidentQuestionEndpage_lang', $this->getLanguage());
        return array(
            'yes' => lang('res_question_end_yes'),
            'no' => lang('res_question_end_no'),
            'content' => lang('res_question_end_content')
        );
    }

    public function getCareLoginLanguage() {
        $this->lang->load('CaregiverLogin_lang', $this->getLanguage());
        return array(
            'login' => lang('login'),
            'username' => lang('username'),
            'password' => lang('password'),
            'goto_resident' => lang('goto_resident')
        );
    }

    public function SetSessionLanguage() {
        if ($this->session->dutch == 1) {
            $this->session->set_userdata('questionLang', 'qDutch');
            $this->session->set_userdata('topicLang', 'topicDutch');
        } else {
            $this->session->set_userdata('questionLang', 'qEnglish');
            $this->session->set_userdata('topicLang', 'topicEnglish');
        }
        return;
    }

}
