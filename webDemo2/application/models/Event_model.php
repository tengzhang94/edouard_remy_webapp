<?php

class Event_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getEvents() {
        $query = $this->db->get("Caregiver");
        return $query->result();
    }    
}
