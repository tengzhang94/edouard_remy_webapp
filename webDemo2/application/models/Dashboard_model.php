<?php

class Dashboard_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getCaregiverSectors() {
        $idCaregiver = $this->session->userdata('idCaregiver'); //Get id from session to get caregivers sector id
        $sectorId = $this->db->query("SELECT Sectors_idSector AS sectorId FROM Caregiver_has_Sectors WHERE Caregiver_idCaregiver = '$idCaregiver'");
        return $sectorId->result_array();
    }
    
    public function getAllMessagesFromSectors($sectors) {
        if(count($sectors) == 0) {
            $messages = array("Geen berichten.");
            return $messages;
        }
        
        $messages = array(); //Array to store all results. Starts off empty.
        //Caregiver can have multiple sectors, loop throught them to get all messages and store in session for later use/filtering.
        for ($x = 0; $x < count($sectors); $x++) {
            $id = $sectors[$x]['sectorId'];
            $mResult = $this->db->query("SELECT * FROM Messages WHERE sectorId = '$id'");
            for ($i = 0; $i < $mResult->num_rows(); $i++) {                
                $messages[] = $mResult->result_array()[$i];
            }
        }
        return $messages;
    }
    
    public function getMessages() {
        $sectorIds = Dashboard_model::getCaregiverSectors();
        return Dashboard_model::getAllMessagesFromSectors($sectorIds);
    }
    
    function deleteMessages($ids) {
        foreach($ids as $id) {
            $this->db->where('idMessage', $id);
            $this->db->delete('Messages');
        }
    }
}

