<?php

class Sector_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllSectorInfos() {
        $sectors = $this->db->query("SELECT name, idSector, COUNT(idResident) AS residentCount FROM Sectors LEFT JOIN Resident ON idSector = Sectors_idSector GROUP BY idSector");
        return $sectors->result_array();
    }
}