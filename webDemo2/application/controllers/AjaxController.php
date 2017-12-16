<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('Menu_model');
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
    
    public function getSectorInfo1() {
         
        
                
        $typeList = $this->input->post('typeList');
            $idList = $this->input->post('idList');
           
            
             $type="(";
            for($i=0;$i<(count($typeList)-1);$i++)
            {
                $type=$type."notificationType= '$typeList[$i]'  OR ";
                
            }
           
            $type=$type."notificationType= '$typeList[$i]' )";
            
            $id="(";
            
            for($i=0;$i<(count($idList)-1);$i++)
                {
                    $id=$id."idResident = '$idList[$i]' OR ";
                }
              
                $id=$id."idResident = '$idList[$i]' )";
                
                $query = $this->db->query("SELECT * FROM Notifications WHERE $id AND $type");
      
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
        $question['score']= $score;
        $data = $this->session->userdata('answers');
        $data[] = $question;
        $this->session->set_userdata('answers', $data);
    }
    
    public function getMessage(){
        $messages = $this->session->userdata('messages');
        $newIndex = $this->session->userdata('messageNr') + $this->input->post('correction');
        $this->session->set_userdata('messageNr',$newIndex);
        $returnedMessage = $messages[$newIndex];
        if($newIndex == 0){ //check if it's the first message
            $returnedMessage['firstMessage'] = true;
        }
        else{
            $returnedMessage['firstMessage'] = false;
        }
        if($newIndex == count($messages)-1){ //check if it's the last message
            $returnedMessage['lastMessage'] = true;
        }
        else{
           $returnedMessage['lastMessage'] = false;
        }
        return $this->output->set_content_type('application/json')->set_output(json_encode($returnedMessage));
    }
}