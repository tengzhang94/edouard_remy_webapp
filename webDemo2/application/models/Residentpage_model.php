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
    
    public function getResidentWithId($id) {
        $query = $this->db->query("SELECT * FROM Resident WHERE idResident = $id");
        return $query->row();
    }
    
    public function getResidentNotes($id) {
        $query = $this->db->query("SELECT text FROM Notes WHERE Resident_idResident = $id");
        return $query->result_array();
    }
    
    public function getResidentFromSector($sectorId){
        $query = $this->db->query("SELECT * FROM Resident WHERE Sectors_idSector = $sectorId");
        return $query->result_array();
    }

}
