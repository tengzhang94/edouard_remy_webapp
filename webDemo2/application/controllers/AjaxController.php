<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('Menu_model');
        $this->load->model('Language_model');
    }
    
    public function getSectorInfo() {
        $idSector = $this->input->post('idSector');
        $this->db->where('Sectors_idSector', $idSector);
        $query = $this->db->get('Resident');
        if($result= $query->result()){
            return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result,JSON_FORCE_OBJECT));
        }
    }
    
    public function removeSector() {
        $idSector = $this->input->post('idSector');
        $this->db->where('Sectors_idSector', $idSector);
        $query = $this->db->get('Resident');
        if($query->num_rows() == 0){
            $this->db->delete('Sectors', array('idSector' => $idSector));
        }
    }
    
    public function addResident() {
        $idSector = $this->input->post('idSector');
        $firstName = $this->input->post('firstName');
        $lastName = $this->input->post('lastName');
        $result = $this->db->query("UPDATE Resident SET Sectors_idSector = '$idSector' WHERE (firstName = '$firstName' AND lastName = '$lastName')");
        return $result;
    }
    
    public function saveScore(){
        $question['questionId'] = $this->input->post('questionId');
        $score = $this->input->post('score');
        if($score != -1){
            $question['score']= $score;
        };
        $data = $this->session->userdata('answers');
        $data[] = $question;
        $this->session->set_userdata('answers', $data);
    }
}