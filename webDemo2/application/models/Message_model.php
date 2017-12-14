<?php
class Message_model extends CI_Model {

    public function getAllMessages($idResident){
        return $this->db->query(
            "SELECT 'Messages'.*, 'Users'.'firstName', 'Users'.'lastName', 'Users'.'photo'
            FROM 'Messages'
            LEFT JOIN(
                SELECT 
                'idCaregiver' as 'id',
                'firstName',
                'lastName',
                'photo'
                FROM 'Caregiver'
                UNION SELECT
                'idFamily' as 'id',
                'firstName',
                'lastName',
                'photo'
                FROM 'Family'
            ) AS 'Users'
            ON 'Messages'.'idSender'='Users'.'userName'
            WHERE 'id' = '$idResident'
            ORDER BY 'Messages'.'MessageDate'"
        )->result_array();
    }
    
    public function sendMessage($idSender, $idReceiver, $messageText, $messagePhoto){
        date_default_timezone_set("Europe/Brussels");
        $data = array(
            "idSender" => $idSender,
            "idReceiver" => $idReceiver,
            "messageText" => $messageText,
            "messagePhoto" => $messagePhoto,
            "messageDate" => date("Y-m-d")
        );
        $this->db->insert('Messages', $data);
    }
}
