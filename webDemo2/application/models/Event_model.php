<?php

class Event_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getEvents() {
        $query = $this->db->get("Caregiver");
        return $query->result();
    }
    
    public function login($firstName,$password) {
        $query = $this->db->query("select * from Caregiver where firstName='$firstName'");
        $result = $query->result();
        if(password_verify($password, $result[0]->password)) return $result;
        else return NULL;
    }
    
    public function insertCaregiver($firstName,$lastName,$email,$password) {
        $data = array(
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
        );

        $this->db->insert('caregiver', $data); 
    }

    
}
