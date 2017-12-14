<?php
class Notification_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function lowAverageNot($residentId, $topicId) {
        $residentInfo = $this->db->query("SELECT firstName, lastName, Sectors_idSector FROM Resident WHERE idResident = '$residentId'")->result_array();
        $topicName = $this->db->query("SELECT * FROM Topics WHERE idTopic = '$topicId'")->result_array();
        $msgTxt = $residentInfo[0]["firstName"] ." " .$residentInfo[0]["lastName"] ." heeft een lage gemiddelde score gegeven op de categorie: " .$topicName[0]["topicDutch"] .".";
        $not_data = array(
            "idResident" => $residentId,
            "Sectors_idSector" => $residentInfo[0]['Sectors_idSector'],
            "messageText" => $msgTxt,
            "priority" => 5,
            "notificationType" => "lowScore");
        $this->db->insert('Notifications', $not_data);
    }
    
    public function topicNot($residentId, $topicId) {
        $residentInfo = $this->db->query("SELECT firstName, lastName, Sectors_idSector FROM Resident WHERE idResident = '$residentId'")->result_array();
        $topicName = $this->db->query("SELECT * FROM Topics WHERE idTopic = '$topicId'")->result_array();
        $msgTxt = $residentInfo[0]["firstName"] ." " .$residentInfo[0]["lastName"] ." heeft feedback gegeven over: " .$topicName[0]["topicDutch"] .".";
        $not_data = array(
            "idResident" => $residentId,
            "Sectors_idSector" => $residentInfo[0]["Sectors_idSector"],
            "messageText" => $msgTxt,
            "priority" => 0,
            "notificationType" => "activity");
        $this->db->insert('Notifications', $not_data);
    }
}//$residentInfo[0]->firstName + " " + $residentInfo[0]->lastName = "heeft feedback gegeven over: " + $topicName[0]->topicDutch + "."