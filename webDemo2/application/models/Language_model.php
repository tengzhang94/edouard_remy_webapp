<?php

/*
 * This model uses the language files to make it easier to parse them into the views
 */

class Language_model extends CI_Model {

    public function getResNavLanguage() {
        $this->lang->load('ResidentNav_lang', $this->session->language);
        return array(
            'font_size' => lang('res_navbar_font_size'),
            'greater' => lang('res_navbar_bigger_font'),
            'smaller' => lang('res_navbar_smaller_font'),
            'choose_topic' => lang('choose_topic'),
            'welcome' => lang('welcome')
        );
    }

    public function getResQuestionLanguage() {
        $this->lang->load('ResidentQuestion_lang', $this->session->language);
        return array(
            "verybad" => lang('verybad'),
            "bad" => lang('bad'),
            "ok" => lang('ok'),
            "good" => lang('good'),
            "verygood" => lang('verygood')
        );
    }

    public function getResQuestionEndLanguage() {
        $this->lang->load('ResidentQuestionEndpage_lang', $this->session->language);
        return array(
            'yes' => lang('res_question_end_yes'),
            'no' => lang('res_question_end_no'),
            'content' => lang('res_question_end_content')
        );
    }

    public function getCareLoginLanguage() {
        $this->lang->load('CaregiverLogin_lang', $this->session->language);
        return array(
            'login' => lang('login'),
            'username' => lang('username'),
            'password' => lang('password'),
            'goto_resident' => lang('goto_resident')
        );
    }
    
    public function getAddResidentLanguage(){
        $this->lang->load('AddResident_lang', $this->session->language);
        return array(
            "uploadPhoto" => lang('addRes_uploadPhoto'),
            "firstName" => lang('addRes_firstName'),
            "lastName" => lang("addRes_lastName"),
            "birthDate" => lang("addRes_birthDate"),
            "sector" => lang("addRes_sector"),
            "room" => lang("addRes_room"),
            "gender" => lang("addRes_gender"),
            "male" => lang("addRes_male"),
            "female" => lang("addRes_female"),
            "married" => lang("addRes_married"),
            "children" => lang("addRes_children"),
            "yes" => lang("addRes_yes"),
            "no" => lang("addRes_no")
        );
    }
    
    public function getCaregiverInfoLanguage(){
        $this->lang->load('CaregiverInfo_lang', $this->session->language);
        return array(
            "firstName" => lang("CareInfo_firstName"),
            "lastName" => lang("CareInfo_lastName"),
            "email" => lang("CareInfo_email"),
            "language" => lang("CareInfo_language"),
            "dutch" => lang("CareInfo_dutch"),
            "english" => lang("CareInfo_english"),
            "submit" => lang("CareInfo_submit"),
            "cancel" => lang("CareInfo_cancel"),
            "changePassword" => lang("CareInfo_changePassword"),
            "close" => lang("CareInfo_sluiten"),
            "oldPassword" => lang("CareInfo_oldPassword"),
            "newPassword" => lang("CareInfo_newPassword"),
            "confirmPassword" => lang("CareInfo_confirmPassword")
        );
    }
    
    public function getIndivResLanguage(){
        $this->lang->load('IndivResident_lang', $this->session->language);
        return array(
            "room" => lang("IndivRes_room"),
            "sectorString" => lang("IndivRes_sector"),
            "languageString" => lang("IndivRes_language"),
            "birthDate" => lang("IndivRes_birthDate"),
            "genderString" => lang("IndivRes_gender"),
            "marriedString" => lang("IndivRes_married"),
            "childrenString" => lang("IndivRes_children"),
            "notesString" => lang("IndivRes_notes"),
            "addNote" => lang("IndivRes_addNote"),
            "writeNote" => lang("IndivRes_writeNote"),
            "submit" => lang("IndivRes_submit"),
            "close" => lang("IndivRes_close"),
            "scores" => lang("IndivRes_scores"),
            "issues" => lang("IndivRes_issues"),
            "shortTerm" => lang("IndivRes_shortTerm"),
            "longTerm" => lang("IndivRes_longTerm")
        );
    }
    
    public function getSectorOverviewLanguage(){
        $this->lang->load('SectorOverview_lang', $this->session->language);
        return array(
            "addSector" => lang("SectorOverview_addSector"),
            "residentsString" => lang("SectorOverview_residents")
        );
    }
    
    public function getSettingsLanguage(){
        $this->lang->load('Settings_lang', $this->session->language);
        return array(
            "personal" => lang("Settings_personal"),
            "settings" => lang("Settings_settings"),
            "questionnaire1" => lang("Settings_questionnaire1"),
            "questionnaire2" => lang("Settings_questionnaire2"),
            "groups1" => lang("Settings_groups1"),
            "groups2" => lang("Settings_groups2")
        );
    }

    public function getStatisticsLanguage(){
        $this->lang->load('Statistics_lang', $this->session->language);
        return array(
            "chooseSectors" => lang("stats_chooseSectors")
        );
    }
    
    public function getDashboardLanguage(){
        $this->lang->load('Dashboard_lang', $this->session->language);
        return array(
            "avgActivity" => lang("dashboard_avgActivity"),
            "avgScore" => lang("dashboard_avgScore")
        );
    }
    
    public function getUploadLanguage(){
        $this->lang->load('Upload_lang', $this->session->language);
        return array(
            "success" => lang("upload_success"),
        );
    }
    
    public function SetSessionLanguage() {
        if ($this->session->language == 'dutch') {
            $this->session->set_userdata('questionLang', 'qDutch');
            $this->session->set_userdata('topicLang', 'topicDutch');
        } else if($this->session->language == 'english'){
            $this->session->set_userdata('questionLang', 'qEnglish');
            $this->session->set_userdata('topicLang', 'topicEnglish');
        }
        return;
    }
    
    

}
