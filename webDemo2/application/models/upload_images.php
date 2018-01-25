<?php 
Class upload_images extends CI_Model{
	function save_image($file){		
        $last_row=$this->db->select('idResident')->order_by('idResident',"desc")->limit(1)->get('Resident')->row();
        
        $original_photoPath = 'http://a17-webapps04.studev.groept.be/upload/';
        $photo =$original_photoPath .$file;
       
        /*$id = $this->session->userdata('idResident');
        //$original_photoPath = 'http://a17-webapps04.studev.groept.be/upload/';
        $photo =$nameOfPhoto;
        */
        $data = array(
            'photo' => $photo,
        );

        $this->db->where('idResident', $last_row->idResident);
        $this->db->update('Resident', $data);
	}
	
	function get_images(){
		$this->db->from('uploaded_images');
		$this->db->order_by('date_uploaded', 'asc');
		$query = $this->db->get();
		
		return $query->result();		
	}
}
?>