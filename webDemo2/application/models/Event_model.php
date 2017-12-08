<?php

class Event_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login($firstName, $password) {
        $query = $this->db->query("select * from Caregiver where firstName='$firstName'");
        $result = $query->result();
        if ($result != NULL) {
            if (password_verify($password, $result[0]->password))
                return $result;
            else
                return NULL;
        } else
            return NULL;
    }

    public function insertCaregiver($firstName, $lastName, $email, $password) {
        $data = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );

        $this->db->insert('Caregiver', $data);
    }

    public function scan($scanResult) {
        $query = $this->db->query("select * from Resident where idResident='$scanResult'");
        return $query->result();
    }

    public function loginResident($qrCode) {
        $query = $this->db->query("SELECT * FROM Resident WHERE QR = '$qrCode'");
        return $query->result();
    }

    public function getPersonalInformation() {
        $idCaregiver = $this->session->userdata('idCaregiver');
        $query = $this->db->query("SELECT * FROM Caregiver WHERE  idCaregiver= '$idCaregiver'");

        return $query->result_array();
    }

    public function changePersonalInformation($language, $email, $firstName, $lastName) {
        $idCaregiver = $this->session->userdata('idCaregiver');

        $data = array(
            'lang' => $language,
            'email' => $email,
            'firstName' => $firstName,
            'lastName' => $lastName,
        );

        $this->db->where('idCaregiver', $idCaregiver);
        $this->db->update('Caregiver', $data);
    }

    public function changePersonalPhoto($nameOfPhoto) {
        $idCaregiver = $this->session->userdata('idCaregiver');
        $original_photoPath = 'http://a17-webapps04.studev.groept.be/upload/';
        $photo = $original_photoPath . $nameOfPhoto;

        $data = array(
            'photo' => $photo,
        );

        $this->db->where('idCaregiver', $idCaregiver);
        $this->db->update('Caregiver', $data);
    }

    public function changePassword($password) {
        $idCaregiver = $this->session->userdata('idCaregiver');

        $data = array(
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );

        $this->db->where('idCaregiver', $idCaregiver);
        $this->db->update('Caregiver', $data);
    }
    
    public function getSectors() {
        $sectors = $this->db->query("SELECT idSector, name from Sectors")->result();
        return $sectors;
    }

}
