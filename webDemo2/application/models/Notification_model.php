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
    
    public function longtimeNot($idCaregiver) {
        $currentTime = time();
        $dates = $this->db->query("SELECT Resident_idResident, Topics_idTopic, max(Timestamp) AS Timestamp "
                . "FROM Resident_fills_in_Topics "
                . "WHERE Resident_idResident = "
                . "ANY (SELECT idResident "
                . "FROM Resident "
                . "WHERE Sectors_idSector = "
                . "ANY (SELECT Sectors_idSector FROM Caregiver_has_Sectors WHERE Caregiver_idCaregiver = '$idCaregiver'))"
                . "GROUP BY Resident_idResident")->result_array();
        date_default_timezone_set('Europe/Brussels');
        for($i = 0; $i < count($dates); $i++) {
            if(strtotime($dates[$i]['Timestamp']) - $currentTime > (86400 * 14)) {
                Notification_model::longTimeNotToDB($dates[$i]['Resident_idResident']);
            }
        }
    }
    
    public function longtimeNotToDB($residentId) {
        $residentInfo = $this->db->query("SELECT firstName, lastName, Sectors_idSector FROM Resident WHERE idResident = '$residentId'")->result_array();
        $msgTxt = $residentInfo[0]["firstName"] ." " .$residentInfo[0]["lastName"] ." heeft al 2 weken geen vragenlijst meer ingevuld.";
        $not_data = array(
            "idResident" => $residentId,
            "Sectors_idSector" => $residentInfo[0]["Sectors_idSector"],
            "messageText" => $msgTxt,
            "priority" => 6,
            "notificationType" => "activity");
        $this->db->insert('Notifications', $not_data);
    }
}