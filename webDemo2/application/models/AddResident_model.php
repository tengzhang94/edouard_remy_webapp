<?php
class AddResident_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function checkExist($firstName, $lastName, $birthDate, $gender) {
        $query = $this->db->query("SELECT * from Resident WHERE firstName='$firstName' AND lastName='$lastName' AND birthDate='$birthDate' AND gender='$gender'"); //Asks for result with these parameters
        $result = $query->result();
        if ($result != NULL) return true; //When there is a result (not NULL), this resident already exists in the database.
        return false;
    }
    
    public function addInfoResident($firstName, $lastName, $birthDate, $gender, $married, $children, $idSector,$roomNr,$photo) {
        $data = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthDate,
            'gender' => $gender,
            'married' => $married,
            'children' => $children,
            'Sectors_idSector'=> $idSector,
            'roomNr' => $roomNr,
            'photo' => $photo,
        );
        
        $this->db->insert('Resident', $data);
    }

    public function insertCaregiver($firstName, $lastName, $email, $password) {
        $data = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );

        $this->db->insert('caregiver', $data);
    }
    
        public function scan($scanResult) {
        $query = $this->db->query("select * from Resident where idResident='$scanResult'");
        return $query->result();
    }

}