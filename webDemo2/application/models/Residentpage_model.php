<?php
/*
 * Model for everything concering the 'resident' part of the caregivers side
 */

class Residentpage_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getAllResidents() {
        $query = $this->db->query("SELECT * FROM Resident");
        return $query->result_array();
    }
    public function getResidentsBySearch($name)
    {
         $query = $this->db->query("SELECT * FROM Resident WHERE firstName LIKE '%$name%' OR lastName LIKE '%$name%'");
        return $query->result_array();
    }
    
    public function getResidentWithId($id) {
        $query = $this->db->query("SELECT * FROM Resident WHERE idResident = $id");
        $resident = $query->row();
        $data['firstName'] = $resident->firstName;
        $data['lastName'] = $resident->lastName;
        $sector = $this->Residentpage_model->getSectorWithId($resident->Sectors_idSector);
        if (isset($sector))
            $data['sector'] = $sector->name;
        else
            $data['sector'] = "not set";
        $data['gender'] = $resident->gender;
        $data['photo'] = $resident->photo;        
        if (isset($resident->roomNr))
            $data['roomNr'] = $resident->roomNr;
        else
            $data['roomNr'] = "not set";
        $data['birthday'] = $resident->birthDate;
        $data['language'] = $resident->lang;
        $data['married'] = $resident->married ? "yes" : "no";
        $data['children'] = $resident->children;
        $data['notes'] = $this->Residentpage_model->getResidentNotes($this->session->resident_id);
        return $data;
    }
    
    public function getResidentNotes($id) {
        $query = $this->db->query("SELECT * FROM Notes WHERE Resident_idResident = $id");
        return $query->result_array();
    }
    
    
    public function getResidentFromSector($sectorId){
        $query = $this->db->query("SELECT * FROM Resident WHERE Sectors_idSector = $sectorId");
        return $query->result_array();
    }
    
    public function getSectorWithId($id) {
        if(isset($id)) {
            $query = $this->db->query("SELECT * FROM Sectors WHERE idSector = $id");
            return $query->row();
        }
        else return null;
    }
    
    public function getResidentUrgProblems($id) {
        $query = $this->db->query("SELECT * FROM Problems WHERE Resident_idResident = $id AND urgent = 1");
        return $query->result_array();
    }
    
    public function getResidentNonUrgProblems($id) {
        $query = $this->db->query("SELECT * FROM Problems WHERE Resident_idResident = $id AND urgent = 0");
        return $query->result_array();
    }
    
    public function addResidentUrgProblems($id,$text) {
           $data = array(
            'Resident_idResident' => $id,
            'urgent' => 0,
            'text' => $text,                 
        ); 
        $this->db->insert('Problems', $data);
    }
    
    public function addResidentNotes($note,$resident_id){
       
        $data=array(
                'Resident_idResident' => $resident_id,
                'text' => $note,
            );
        $this->db->insert('Notes',$data);    
    }
  
    public function addResidentNonUrgProblems($id,$text) {
           $data = array(
            'Resident_idResident' => $id,
            'urgent' => 1,
            'text' => $text,                 
        ); 
        $this->db->insert('Problems', $data);
    }
    
    function deleteProblems($ids) {
        foreach($ids as $id) {
            $this->db->where('idProblem', $id);
            $this->db->delete('Problems');
        }
    }
    
    function deleteNotes($ids) {
        foreach($ids as $id) {
            $this->db->where('noteId', $id);
            $this->db->delete('Notes');
        }
    }
    
    public function getTopicScore($resident_id,$topic_id){
        $query = $this->db->query("SELECT round(AVG(Answer),1) as avg FROM Resident_fills_in_Topics  INNER JOIN Answers
                                WHERE Timestamp IN
                                (SELECT MAX(Timestamp) FROM Resident_fills_in_Topics
                                INNER JOIN Answers
                                where Resident_fills_in_Topics.id_fill_in = Answers.fill_in_id
                                AND Resident_idResident = $resident_id
                                AND Topics_idTopic = $topic_id)
                                AND Resident_fills_in_Topics.id_fill_in = Answers.fill_in_id
                                AND Resident_idResident = $resident_id
                                AND Topics_idTopic = $topic_id;" );
        return $query->row();          
    }
    
    
        public function getLastSecondScore($resident_id,$topic_id){
        $query = $this->db->query("SELECT round(AVG(Answer),1) as avgSecondLast FROM a17_webapps04.Resident_fills_in_Topics  INNER JOIN a17_webapps04.Answers
                                WHERE Timestamp IN
                                (SELECT MAX(Timestamp) as timeSecondLast FROM a17_webapps04.Resident_fills_in_Topics
                                    INNER JOIN a17_webapps04.Answers
                                    where a17_webapps04.Resident_fills_in_Topics.id_fill_in = a17_webapps04.Answers.fill_in_id
                                    AND Resident_idResident = $resident_id
                                    AND Topics_idTopic = $topic_id
                                    AND Timestamp < (SELECT MAX(Timestamp) as lastTime FROM a17_webapps04.Resident_fills_in_Topics
                                    INNER JOIN a17_webapps04.Answers
                                    where a17_webapps04.Resident_fills_in_Topics.id_fill_in = a17_webapps04.Answers.fill_in_id
                                    AND Resident_idResident = $resident_id
                                    AND Topics_idTopic =$topic_id))
                                AND a17_webapps04.Resident_fills_in_Topics.id_fill_in = a17_webapps04.Answers.fill_in_id
                                AND Resident_idResident  = $resident_id
                                AND Topics_idTopic = $topic_id;" );
        return $query->row();          
    }
    
    public function getLastTime($resident_id,$topic_id){
        $query = $this->db->query("SELECT MAX(Timestamp) as lastTime FROM a17_webapps04.Resident_fills_in_Topics
                                    INNER JOIN a17_webapps04.Answers
                                    where a17_webapps04.Resident_fills_in_Topics.id_fill_in = a17_webapps04.Answers.fill_in_id
                                    AND Resident_idResident = $resident_id
                                    AND Topics_idTopic =$topic_id;"
                );
        return $query->row();
    }
    
    public function getSecondLastTime($resident_id,$topic_id){
         $query = $this->db->query("SELECT MAX(Timestamp) as timeSecondLast FROM a17_webapps04.Resident_fills_in_Topics
                                    INNER JOIN a17_webapps04.Answers
                                    where a17_webapps04.Resident_fills_in_Topics.id_fill_in = a17_webapps04.Answers.fill_in_id
                                    AND Resident_idResident =$resident_id
                                    AND Topics_idTopic = $topic_id
                                    AND Timestamp < (SELECT MAX(Timestamp) as lastTime FROM a17_webapps04.Resident_fills_in_Topics
                                    INNER JOIN a17_webapps04.Answers
                                    where a17_webapps04.Resident_fills_in_Topics.id_fill_in = a17_webapps04.Answers.fill_in_id
                                    AND Resident_idResident =$resident_id
                                    AND Topics_idTopic = $topic_id);"
                );
        return $query->row();
    }
    
    public function getAvgScoreTotal($resident_id){
        
    }
    
    public function addResidentAvgScoreTotal($id,$avgScore_last) {
        
        
        if($avgScore_last >= 4){
            $faceImage = 'http://a17-webapps04.studev.groept.be/upload/icons8-lol-100.png';
        }
        else if($avgScore_last >= 3){
            $faceImage = 'http://a17-webapps04.studev.groept.be/upload/happy.png';
        }else if($avgScore_last >= 2){
            $faceImage = 'http://a17-webapps04.studev.groept.be/upload/sadsadsad.png';
        }
        else if($avgScore_last >= 1){
            $faceImage = 'http://a17-webapps04.studev.groept.be/upload/sadsad.png';
        }else{
            $faceImage = 'http://a17-webapps04.studev.groept.be/upload/sad.png';
        }
           $data = array(
            'avgLastScore' => $avgScore_last, 
            'faceImage'=> $faceImage
        ); 

        $this->db->where('idResident', $id);
        $this->db->update('Resident', $data);
 
    }
    
    



   


}
