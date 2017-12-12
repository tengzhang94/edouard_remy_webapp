<?php
class Notification_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function lowAverageNot($residentId, $topicId) {
        $residentInfo = $this->db->query("SELECT (firstName, lastName, Sectors_idSector) FROM Resident WHERE idResident = '$residentId'")->result_array();
        $topicName = $this->db->query("SELECT * FROM Topics WHERE idTopic = '$topicId'")->result_array();
        $not_data = array(
            'Sectors_idSector' => $residentInfo['Sectors_idSector'],
            'messageText' => $residentInfo['firstName'] + " " + $residentInfo['lastName'] = "heeft een lage gemiddelde score gegeven op de categorie: " + $topicName['topicDutch'] + ".",
            'priority' => 5);
        $this->db->insert('Notifications', $not_data);
    }
    
    public function topicNot($residentId, $topicId) {
        $residentInfo = $this->db->query("SELECT (firstName, lastName, Sectors_idSector) FROM Resident WHERE idResident = '$residentId'")->result_array();
        $topicName = $this->db->query("SELECT * FROM Topics WHERE idTopic = '$topicId'")->result_array();
        $not_data = array(
            'Sectors_idSector' => $residentInfo['Sectors_idSector'],
            'messageText' => $residentInfo['firstName'] + " " + $residentInfo['lastName'] = "heeft feedback gegeven over: " + $topicName['topicDutch'] + ".",
            'priority' => 0);
        $this->db->insert('Notifications', $not_data);
    }
}