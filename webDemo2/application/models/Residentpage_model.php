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
        $query = $this->db->query("SELECT text FROM Notes WHERE Resident_idResident = $id");
        return $query->result_array();
    }
    
    public function addResidentNotes($note){
        if($note != NULL) {
        $this->db->insert('Notes', array('text' => $note));
        }
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


}
