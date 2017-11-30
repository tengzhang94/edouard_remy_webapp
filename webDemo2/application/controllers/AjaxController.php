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
        $idSector = filter_input(INPUT_POST, 'idSector');
        $info['results'] = $this->db->get_where('Resident', array('Sectors_idSector' => $idSector));
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($info));
        return $info;
    }
    
    public function test() {
        
    }
}