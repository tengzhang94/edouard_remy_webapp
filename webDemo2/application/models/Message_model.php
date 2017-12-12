<?php
class Message_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function lowAverageMsg($residentId, $topicId) {
        $residentInfo = $this->db->query("SELECT (firstName, lastName, Sectors_idSector) FROM Resident WHERE idResident = '$residentId'")->result_array();
        $topicName = $this->db->query("SELECT * FROM Topics WHERE idTopic = '$topicId'")->result_array();
        $msg_data = array(
            'sectorId' => $residentInfo['Sectors_idSector'],
            'messageText' => $residentInfo['firstName'] + " " + $residentInfo['lastName'] = "heeft een lage gemiddelde score gegeven op de categorie: " + $topicName['topicDutch'] + ".",
            'priority' => 0);
        $this->db->insert('Messages', $msg_data);
    }
}