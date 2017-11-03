<?php

class Event_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getEvents() {
        $query = $this->db->get("Caregiver");
        return $query->result();
    }
    
    public function getEvents_login($firstName,$password) {
        $query = $this->db->query("select * from Caregiver where firstName='$firstName' And  password= '$password'");
        return $query->result();
    }
    
    public function insertCaregiver($firstName,$lastName,$email,$password) {
        $data = array(
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'password' => $password
        );

        $this->db->insert('caregiver', $data); 
    }

    
}
