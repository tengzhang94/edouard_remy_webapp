<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CaregiverController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('Menu_model');
        $this->load->model('Language_model');
    }

    public function login() {
        $this->load->model('Event_model');
        $data = $this->Language_model->getCareLoginLanguage();
        $username = $this->input->post('user');
        $password = $this->input->post('password');
        $data['login_fail'] = '';

        //unset all self-made session variables
        $sessiondata = $this->session->all_userdata();
        foreach ($sessiondata as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }

        $this->form_validation->set_rules('user', 'lang:username', 'trim|required', array('required' => 'Voer een %s in'));
        $this->form_validation->set_rules('password', 'lang:password', 'trim|required', array('required' => 'Voer een %s in'));

        if ($this->form_validation->run() == FALSE) {
            $this->parser->parse('login_new', $data);
        } else {
            $result = $this->Event_model->login($username, $password);

            if ($result) {
                $this->session->set_userdata('logged_in', 'caregiver');
                $this->session->set_userdata('language', $result[0]->lang);
                $this->Language_model->setSessionLanguage();
                $this->session->set_userdata('name', $result[0]->firstName);
                $this->session->set_userdata('idCaregiver', $result[0]->idCaregiver);
                redirect('CaregiverController/home');
            } else {
                $data['login_fail'] = 'Inloggegevens incorrect';
                $this->parser->parse('login_new', $data);
            }
        }
    }

    public function home() {
        $this->load->model('Notification_model');
        $this->Notification_model->longtimeNot($this->session->userdata('idCaregiver'));
        $this->load->model('Dashboard_model');
        $result = $this->Dashboard_model->getNotifications(); //Message rows from database for the sectors this caregiver monitors        
        $messages = array(); //Create array of arrays to fill {messages} in dashDemo.php
        for ($i = 0; $i < count($result); $i++) {
            $temp = array('messageText' => $result[$i]['messageText'], 'messageId' => $result[$i]['idNotification'], 'redirectionPath' => $result[$i]['redirectPath']);
            array_push($messages, $temp);
        }
        
          

        //Parse the html document
        $data = $this->Language_model->getDashboardLanguage();
        $data['messages'] = $messages;
        $result1 = $this->Dashboard_model->getsectors_caregiverhas();
        $data["sectors"] = $result1;

        $data['title'] = 'Homepage';    //Fill in title for the page
        $data['menu'] = $this->Menu_model->get_menuitems('Homepage');   //Get all the menu items and set the right one as active        
        $data['content'] = $this->parser->parse('dashDemo', $data, true);   //parse messages into dashboard page
        $this->parser->parse('navbar_topbar', $data);    //Parse everything and display
    }

    public function deleteNotifications() {       
        $ids = $this->input->post('delete_list');
        $this->load->model('Dashboard_model');
        $this->Dashboard_model->deleteNotifications($ids);
        redirect('CaregiverController/home');
    }

    public function settings() {
        $this->session->set_userdata('passwordCondition', 'begin');
        $data = $this->Language_model->getSettingsLanguage();
        $data['title'] = 'Settings';
        $data['menu'] = $this->Menu_model->get_menuitems('Settings');
        $data['content'] = $this->parser->parse('settings', $data, true);
        $this->parser->parse('navbar_topbar', $data);
    }

    public function selectTopic() {
        redirect('ResidentController/Topics');
    }
    
    public function addMessage(){
        redirect('ResidentController/sendMessage');
    }

    public function insert() {
        $this->load->model('Event_model');
        $content = $this->parser->parse('content_test', $results, true);
        $results['caregiver'] = $this->Event_model->insertCaregiver();
    }

   
    
    public function addResident() {   // just to load the page addr\Resident
        $firstName = null;
        $lastName = null;
        $birthDate = null;
        $idSector = null;
        $roomNr = null;
        $gender = 1;
        $married = 1;
        $children = 1;
        $photo =null;
        $this->load->model('AddResident_model');
        $this->AddResident_model->addInfoResident($firstName, $lastName, $birthDate, $gender, $married, $children, $idSector, $roomNr, $photo);
        redirect('careGiverController/addResidentInfo');
        
    }
    
    public function addResidentInfo(){
        $data = $this->Language_model->getAddResidentLanguage();
        
        $this->load->model('Event_model');

        $result = $this->Event_model->getResidentInformation();
        if ($result[0]['gender'] == 'M') {
            $data['check_male'] = 'checked';
            $data['check_female'] = '';
        } else if ($result[0]['gender'] == 'f') {
            $data['check_male'] = '';
            $data['check_female'] = 'checked';
        }
        
        if ($result[0]['married'] == '1') {
            $data['check_married'] = 'checked';
            $data['check_single'] = '';
        } else if ($result[0]['married'] == '0') {
            $data['check_married'] = '';
            $data['check_single'] = 'checked';
        }
        
        if ($result[0]['children'] == '1') {
            $data['check_children'] = 'checked';
            $data['check_nochildren'] = '';
        } else if ($result[0]['children'] == '0') {
            $data['check_children'] = '';
            $data['check_nochldren'] = 'checked';
        }

        $data['firstName'] = $result[0]['firstName'];
        $data['lastName'] = $result[0]['lastName'];
        $data['birthDate'] = $result[0]['birthDate'];
        $data['idSector'] = $result[0]['Sectors_idSector'];
        $data['roomNr'] = $result[0]['roomNr'];
        $data['photo'] = $result[0]['photo'];

        $data['title'] = 'AddResident';
        $data['menu'] = $this->Menu_model->get_menuitems('Resident');
        $data['content'] = $this->parser->parse('AddResident', $data, true);
        $this->parser->parse('navbar_topbar', $data);
    }
   

    public function addResidentConfirm() {  //post the new resident info and return to resident overview page
        if ($_REQUEST['submit1']) {

            $firstName = $this->input->post('firstName');
            $lastName = $this->input->post('lastName');
            $birthDate = $this->input->post('birthDate');
            $idSector = $this->input->post('sector');
            $roomNr = $this->input->post('room');
            $gender = $this->input->post('gender');
            $married = $this->input->post('married');
            $children = $this->input->post('children');

            if ($this->input->post('firstName') == NULL || $this->input->post('lastName') == NULL || $this->input->post('birthDate') == NULL || $this->input->post('sector') == NULL || $this->input->post('room') == NULL) { //TODO: Must be replaced by form validation
                redirect('caregiverController/resident');
                //$data['success'] = "";
                //$this->parser->parse('navbar_topbar', $data);        
            }
             else {
                $this->load->model('AddResident_model');
                if ($this->AddResident_model->checkExist($firstName, $lastName, $birthDate, $gender) == false) {
                    $this->AddResident_model->addInfoResident($firstName, $lastName, $birthDate, $gender, $married, $children, $idSector, $roomNr, $photo);
                    redirect('caregiverController/resident');
                    //return to the resident page
                    //$data['success'] = "Success!";
                    //$this->parser->parse('navbar_topbar', $data);
                } else {
                    $data['success'] = "This resident already exists!";
                    $this->parser->parse('navbar_topbar', $data);
                }
            }
        } elseif ($_REQUEST['return1']) {
            redirect('caregiverController/resident');
        }
    }

    public function resident() {
        $this->load->model('Residentpage_model');
        $data['residents'] = $this->Residentpage_model->getAllResidents();
        
        $this->load->model('Dashboard_model');
        $result1 = $this->Dashboard_model->getsectors_caregiverhas();
        $data["sectors"] = $result1;
 
        $resident['title'] = 'Resident Overview';
        $resident['menu'] = $this->Menu_model->get_menuitems('Residents');
        $resident['content'] = $this->parser->parse('residents_overview', $data, true);
        $this->parser->parse('navbar_topbar', $resident);
    }

    public function searchResident() {
        $this->load->model('Residentpage_model');

        $name = $this->input->post('inputName');
        $data['residents'] = $this->Residentpage_model->getResidentsBySearch($name);
        
         $this->load->model('Dashboard_model');
        $result1 = $this->Dashboard_model->getsectors_caregiverhas();
        $data["sectors"] = $result1;

        $resident['title'] = 'Resident Overview';
        $resident['menu'] = $this->Menu_model->get_menuitems('Residents');
        $resident['content'] = $this->parser->parse('residents_overview', $data, true);
        $this->parser->parse('navbar_topbar', $resident);
    }

    public function residentIndividual() {
        $data = $this->Language_model->getIndivResLanguage();
        $this->load->model('Residentpage_model');
        if (null != $this->input->post("resident_id"))
            $this->session->set_userdata('resident_id', $this->input->post("resident_id"));
        $resident_id = $this->session->resident_id;
        $resident = array_merge($data, $this->Residentpage_model->getResidentWithId($resident_id));
        $resident['scores_hidden'] = '';
        $resident['problems_hidden'] = 'hidden';
        $resident['scores_active'] = "active navBtn";
        $resident['problems_active'] = "inactive navBtn";
        /* $data['firstName'] = $resident->firstName;
          $data['lastName'] = $resident->lastName;
          $sector = $this->Residentpage_model->getSectorWithId($resident->Sectors_idSector);
          if (isset($sector))
          $data['sector'] = $sector->name;
          else
          $data['sector'] = "not set";
          $data['gender'] = $resident->gender;
          if (isset($resident->photo))
          $data['photo'] = $resident->photo;
          else
          $data['photo'] = base_url() . "assets/css/image/placeholder.png";
          if (isset($resident->roomNr))
          $data['roomNr'] = $resident->roomNr;
          else
          $data['roomNr'] = "not set";
          $data['birthday'] = $resident->birthDate;
          $data['language'] = $resident->dutch ? "Dutch" : "English";
          $data['married'] = $resident->married ? "yes" : "no";
          $data['children'] = $resident->children;
          $data['notes'] = $this->Residentpage_model->getResidentNotes($resident_id); */
        //last score
        for($i=1;$i<12;$i++){
            $score_last[$i] =  $this->Residentpage_model->getTopicScore($resident_id,$i)->avg;
            if($score_last[$i] == null){
                $score_last[$i] = 'no';
            }
            
            $score_second_last[$i] = $this->Residentpage_model->getLastSecondScore($resident_id,$i)->avgSecondLast;
            if($score_last[$i] >=  $score_second_last[$i] ){
                $arrowImage[$i] = 'assets/css/image/icons8-arrow.png';
            }
            else{
                $arrowImage[$i] = 'assets/css/image/icons8-redArrow.png';
            }
            
            //time interval between last and secondLast filled_in 
            date_default_timezone_set('UTC');
            $time_last[$i] = $this->Residentpage_model->getLastTime($resident_id,$i)->lastTime;
           // $time_secondLast[$i] = $this->Residentpage_model->getSecondLastTime($resident_id,$i)->timeSecondLast;
            $ts1[$i] = strtotime("now");
            $ts2[$i]= strtotime($time_last[$i]);
            $time_interval[$i]=floor(($ts1[$i]-$ts2[$i])/86400); 
            if($time_interval[$i] > 99){
                $time_interval[$i] = '∞';
                $colorSubject2[$i] = '#ff8166';
            }
            else if($time_interval[$i] >=30){
                $colorSubject2[$i] = '#ff8166';
            }
            else{
            $colorSubject2[$i] = '#2c3d51';
            }
        }    
        
        //determine mark image
        $time_interval_biggest = max($time_interval);
        if($time_interval_biggest >= 10){
            $markImage = 'assets/css/image/icons8-mark-red.png';
        }
        else{
            $markImage = 'assets/css/image/icons8-mark-blue.png';
        }
        $resident['markImage'] = $markImage;
        
        //determine happy face
        $a_last = array_filter($score_last);
        if(count($a_last) == 0){
             $avgScore_last = 0;
        }else{
            $avgScore_last = array_sum($score_last)/count($a_last);
        }
        
        $this->Residentpage_model->addResidentAvgScoreTotal($resident_id,$avgScore_last);
        
        $a_second_last = array_filter($score_second_last);
        if(count($a_second_last)==0){
            $avgScore_second_last = 0;
        }
        else{
            $avgScore_second_last = array_sum($score_second_last)/count($a_second_last);
        }
        
        if($avgScore_last >  $avgScore_second_last){
            $faceImage = 'assets/css/image/icons8-face-lol.png';
        }
        else if($avgScore_last == $avgScore_second_last){
            $faceImage = 'assets/css/image/icons8-face-bored.png';
        }else {
            $faceImage = 'assets/css/image/icons8-face-cry.png';
        }
        
        $resident['faceImage'] = $faceImage;
        
        
        //second last score
       // $score_second_last = $this->Residentpage_model->getLastSecondScore($resident_id,'0')->avgSecondLast;
        $resident['scoreTopic1'] = $score_last[1];
        $resident['scoreTopic2'] = $score_last[2];
        $resident['scoreTopic3'] = $score_last[3];
        $resident['scoreTopic4'] = $score_last[4];
        $resident['scoreTopic5'] = $score_last[5];
        $resident['scoreTopic6'] = $score_last[6];
        $resident['scoreTopic7'] = $score_last[7];
        $resident['scoreTopic8'] = $score_last[8];
        $resident['scoreTopic9'] = $score_last[9];
        $resident['scoreTopic10'] = $score_last[10];
        $resident['scoreTopic11'] = $score_last[11];
        

        //arrow image
        $resident['arrowImage1'] = $arrowImage[1];
        $resident['arrowImage2'] = $arrowImage[2];
        $resident['arrowImage3'] = $arrowImage[3];
        $resident['arrowImage4'] = $arrowImage[4];
        $resident['arrowImage5'] = $arrowImage[5];
        $resident['arrowImage6'] = $arrowImage[6];
        $resident['arrowImage7'] = $arrowImage[7];
        $resident['arrowImage8'] = $arrowImage[8];
        $resident['arrowImage9'] = $arrowImage[9];
        $resident['arrowImage10'] = $arrowImage[10];
        $resident['arrowImage11'] = $arrowImage[11];
        
        //time interval
        $resident['LastTime1'] =$time_interval[1];
        $resident['LastTime2'] =$time_interval[2];
        $resident['LastTime3'] =$time_interval[3];
        $resident['LastTime4'] =$time_interval[4];
        $resident['LastTime5'] =$time_interval[5];
        $resident['LastTime6'] =$time_interval[6];
        $resident['LastTime7'] =$time_interval[7];
        $resident['LastTime8'] =$time_interval[8];
        $resident['LastTime9'] =$time_interval[9];
        $resident['LastTime10'] =$time_interval[10];
        $resident['LastTime11'] =$time_interval[11];
        
        //time interval color
        $resident['colorSubject1'] =  $colorSubject2[1] ;
        $resident['colorSubject2'] =  $colorSubject2[2] ;
        $resident['colorSubject3'] =  $colorSubject2[3] ;
        $resident['colorSubject4'] =  $colorSubject2[4] ;
        $resident['colorSubject5'] =  $colorSubject2[5] ;
        $resident['colorSubject6'] =  $colorSubject2[6] ;
        $resident['colorSubject7'] =  $colorSubject2[7] ;
        $resident['colorSubject8'] =  $colorSubject2[8] ;
        $resident['colorSubject9'] =  $colorSubject2[9] ;
        $resident['colorSubject10'] =  $colorSubject2[10] ;
        $resident['colorSubject11'] =  $colorSubject2[11] ;
        
        
        //change sector
        $this->load->model('Sector_model');
        $sectors = $this->Sector_model->getAllSectorInfos();

        $resident["sectors"] = $sectors;

   //     $data["content"] = $this->parser->parse('sectors_overview', $sectorData, true);
    
        
                     
        $resident['title'] = 'Resident';
        $resident['menu'] = $this->Menu_model->get_menuitems('Resident');
        $resident['content'] = $this->parser->parse('residentIndividual', $resident, true);
        $this->parser->parse('navbar_topbar', $resident);
    }

    public function changePassword() {
        $this->load->model('Event_model');
        $password_new = $this->input->post('password_new');
        $password_confirm = $this->input->post('password_confirm');
        $password_old = $this->input->post('password_old');

        $username = $this->session->userdata('name');

        $result = $this->Event_model->login($username, $password_old);

        if ($result) {
            if ($password_new == NULL || $password_confirm == NULL) {
                $this->session->set_userdata('passwordCondition', 'fail1');
                redirect('caregiverController/getPersonalInformation');
            } else {
                if ($password_new == $password_confirm) {
                    $this->session->set_userdata('passwordCondition', 'success');
                    $this->Event_model->changePassword($password_confirm);
                    redirect('caregiverController/getPersonalInformation');
                } else {
                    $this->session->set_userdata('passwordCondition', 'fail');
                    redirect('caregiverController/getPersonalInformation');
                }
            }
        } else {
            $this->session->set_userdata('passwordCondition', 'oldPassword_wrong');
            redirect('caregiverController/getPersonalInformation');
        }
    }

    public function residentProblems() {
        $data = $this->Language_model->getIndivResLanguage();
        $this->load->model('Residentpage_model');
        $resident_id = $this->session->resident_id;
        $resident = array_merge($data, $this->Residentpage_model->getResidentWithId($resident_id));
        $resident['scores_hidden'] = 'hidden';
        $resident['problems_hidden'] = '';
        $resident['scores_active'] = "inactive navBtn";
        $resident['problems_active'] = "active navBtn";
        /* $resident['firstName'] = $resident->firstName;
          $resident['lastName'] = $resident->lastName;
          $sector = $this->Residentpage_model->getSectorWithId($resident->Sectors_idSector);
          if (isset($sector))
          $resident['sector'] = $sector->name;
          else
          $resident['sector'] = "not set";
          $resident['gender'] = $resident->gender;
          if (isset($resident->photo))
          $resident['photo'] = $resident->photo;
          else
          $resident['photo'] = base_url() . "assets/css/image/placeholder.png";
          if (isset($resident->roomNr))
          $resident['roomNr'] = $resident->roomNr;
          else
          $resident['roomNr'] = "not set";
          $resident['birthday'] = $resident->birthDate;
          $resident['language'] = $resident->dutch ? "Dutch" : "English";
          $resident['married'] = $resident->married ? "yes" : "no";
          $resident['children'] = $resident->children;
          $resident['notes'] = $this->Residentpage_model->getResidentNotes($resident_id); */
        

//        $resident['urgProbs'] = $this->Residentpage_model->getResidentUrgProblems($resident_id);
//        $resident['nonUrgProbs'] = $this->Residentpage_model->getResidentNonUrgProblems($resident_id);

        $urgProbs =  $this->Residentpage_model->getResidentUrgProblems($resident_id);
        $nonUrgProbs = $this->Residentpage_model->getResidentNonUrgProblems($resident_id);
        
        $resident['urgProbs'] = $urgProbs;
        $resident['nonUrgProbs'] = $nonUrgProbs;
 
        $resident['title'] = 'Resident';
        $resident['menu'] = $this->Menu_model->get_menuitems('Resident');
        $resident['content'] = $this->parser->parse('residentIndividual', $resident, true);
        $this->parser->parse('navbar_topbar', $resident);
    }

    public function addNonUrgProbs() {
        $text = $this->input->post('nonUrgProb');

        $this->load->model('Residentpage_model');
        $resident_id = $this->session->resident_id;
        $this->Residentpage_model->addResidentUrgProblems($resident_id, $text);
        redirect('caregiverController/residentProblems');
    }

    public function addNewNote() {    //CANNOT SUCCESSFULLY INSERT
        $newNote = $this->input->post('newNote');
        $this->load->model('Residentpage_model');
        $resident_id = $this->session->resident_id;
        $result = $this->Residentpage_model->addResidentNotes($newNote, $resident_id);

        redirect('caregiverController/residentIndividual');
    }

    public function addUrgProbs() {
        $text = $this->input->post('urgProb');

        $this->load->model('Residentpage_model');
        $resident_id = $this->session->resident_id;
        $this->Residentpage_model->addResidentNonUrgProblems($resident_id, $text);

        redirect('caregiverController/residentProblems');
    }

    public function getPersonalInformation() {
        $data = $this->Language_model->getCaregiverInfoLanguage();
        $this->load->model('Event_model');

        $result = $this->Event_model->getPersonalInformation();
        if ($result[0]['lang'] == 'dutch') {
            $data['check_dutch'] = 'checked';
            $data['check_english'] = '';
        } else if ($result[0]['lang'] == 'english') {
            $data['check_dutch'] = '';
            $data['check_english'] = 'checked';
        }

        $data['idcaregiver'] = $result[0]['idCaregiver'];
        $data['email'] = $result[0]['email'];
        $data['password'] = $result[0]['password'];
        $data['lastName'] = $result[0]['lastName'];
        $data['firstName'] = $result[0]['firstName'];
        $data['photo'] = $result[0]['photo'];

        $passwordCondition = $this->session->userdata('passwordCondition');

        if ($passwordCondition == 'success') {
            $data['content'] = 'change password success';
        } elseif ($passwordCondition == 'fail') {
            $data['content'] = 'new and confirm password are not match';
        } elseif ($passwordCondition == 'oldPassword_wrong') {
            $data['content'] = 'old password is wrong';
        } elseif ($passwordCondition == 'fail1') {
            $data['content'] = 'new or confirm password is empty';
        } else {
            $data['content'] = '';
        }


        // $this->parser->parse('careGiverInfo', $data);

        $data['title'] = 'Caregiver';
        $data['menu'] = $this->Menu_model->get_menuitems('CareGiverInfo');
        $data['content'] = $this->parser->parse('careGiverInfo', $data, true);
        $this->parser->parse('navbar_topbar', $data); 
    }

    public function changePersonalInformation() {
        if ($_REQUEST['submit1']) {
            $language = $this->input->post('language');
            $email = $this->input->post('email');
            $firstName = $this->input->post('firstName');
            $lastName = $this->input->post('lastName');

            $this->load->model('Event_model');
            $this->Event_model->changePersonalInformation($language, $email, $firstName, $lastName);
            $this->session->set_userdata('language', $language);
            redirect('caregiverController/settings');
        } elseif ($_REQUEST{'cancel1'}) {
            redirect('caregiverController/settings');
        }
    }

    public function sectorOverview() {
        $sectorData = $this->Language_model->getSectorOverviewLanguage();
        $this->load->model('Sector_model');
        $sectors = $this->Sector_model->getAllSectorInfos();

        $sectorData["sectors"] = $sectors;

        $data['title'] = 'Sectors';
        $data['menu'] = $this->Menu_model->get_menuitems('Settings');
        $data["content"] = $this->parser->parse('sectors_overview', $sectorData, true);
        $this->parser->parse('navbar_topbar', $data);
    }

    public function addSector() {
        $this->load->model('Sector_model');
        $name = $this->input->post("sectorName");
        $this->Sector_model->addSector($name);
        redirect('CaregiverController/sectorOverview');
    }

    public function statistics() {
        $data = $this->Language_model->getStatisticsLanguage();
        $this->load->model('Question_model');
        $this->load->model('Sector_model');
        if (null != $this->input->get('sector'))
            $sector = $this->input->get('sector');
        else
            $sector = '-1';
        $scores = $this->Question_model->getScores($sector);
        if (isset($scores)) {
            for ($i = 0; $i <= 11; $i++) {
                $this->Question_model->getQuestions($i);
                //prepare the inner {questions} loop array
                $k = 0;
                $questions = null;
                foreach ($this->session->topicQuestions as $q) {
                    $score_q = $scores['question_avgs'][$i];
                    $score_q != null ? $avg = ($score_q[$k]->avg != null ? $score_q[$k]->avg : $avg = "/") : $avg = "/";
                    $questions[$k] = array('questionString' => $q->questionString, 'avg' => $avg);
                    $k++;
                }
                //put everything in the topics array for the {topics} loop
                $topics[$i] = array('topicName' => $this->session->topicName,
                    'topicId' => $this->session->topicId,
                    'questions' => $questions,
                    't_avg' => $scores['topic_avg'][$i]);
            }
            $data['hidden'] = '';
            $data['notHidden'] = 'hidden';
            $data['topics'] = $topics;
        } else {
            $data['hidden'] = 'hidden';
            $data['notHidden'] = '';
        }
        $data['sectors'] = $this->Sector_model->getSectors();
        foreach ($data['sectors'] as $s) {
            if ($s->idSector == $sector)
                $data['current_sector'] = $s->name;
        }
        if ($sector == -1)
            $data['current_sector'] = $data['allSectors'];
        $data['current_sector_id'] = $sector;
        $data['title'] = 'Statistics';
        $data['menu'] = $this->Menu_model->get_menuitems('Statistics');
        $data['content'] = $this->parser->parse('statistics', $data, true);
        $this->parser->parse('navbar_topbar', $data);
    }

    public function getChartStats() {
        $this->load->model('Question_model');
        if (null != $this->input->get('sector'))
            $sector = $this->input->get('sector');
        else
            $sector = '-1';
        $topic = $this->input->get('topic');
        $qIds = $this->Question_model->getQuestionIds($topic);
        $startId = reset($qIds)['idQuestion'] - 1;
        $range = count($qIds);
        $scores = $this->Question_model->getChartScores($sector);

        $array = array(            
            array('test1', 2, 1, 1, 3, 1),
            array('test2', 1, 3, 2, 2, 0),
            array('test3', 4, 1, 1, 0, 0),
            array('test4', 1, 2, 3, 1, 1),
            array('test5', 1, 2, 0, 3, 5),
        );

        echo json_encode(array_slice($scores, $startId, $range));
    }

    public function deleteProblems() {
        $ids = $this->input->post('delete_problem');
        $this->load->model('Residentpage_model');
        $this->Residentpage_model->deleteProblems($ids);
        redirect('CaregiverController/residentProblems');
    }

    public function deleteNotes() {
        $ids = $this->input->post('delete_notes');
        $this->load->model('Residentpage_model');
        $this->Residentpage_model->deleteNotes($ids);
        redirect('CaregiverController/residentIndividual');
    }

}
