<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function index(){
		$data = array();
		
		$this->load->model('upload_images');
		
		$data['uploaded_images'] = $this->upload_images->get_images();
		
		
		$this->load->view('home', $data);
	}
	
	function upload(){
		//$filename = md5(uniqid(rand(), true));
            if ($_REQUEST['save']) {
            $filename = $this->input->post('filename');
            }
		$config = array(
			'upload_path' => './upload/',
			'allowed_types' => "gif|jpg|png|jpeg",
			'file_name' => $filename,
                        'max_size'=> 0,
                        'max_width'=> 0,
                        'max_height' => 0
		);
		
		$this->load->library('upload', $config);
		
		if($this->upload->do_upload('userfile'))
			{
			$file_data = $this->upload->data();
			$filepath=$file_data['full_path'];
			$file_dir = $file_data['file_name'];
			$this->load->model('upload_images');
			$this->upload_images->save_image($file_dir);
                        redirect('caregiverController/resident');
			/*
			$data['message'] = "Image uploaded";
		
			$this->load->model('upload_images');
			$data['uploaded_images'] = $this->upload_images->get_images();
			$this->load->view('home', $data);
                        
                         */
			}
                        
                else
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('upload_form', $error);
                }
                        /*
			else
			{
			$data = array();	
			$this->load->model('upload_images');			
			$data['uploaded_images'] = $this->upload_images->get_images();
			
			$error = $this->upload->display_errors();
			$data['errors'] = $error;
			$this->load->view('home', $data);
			}
                         *
                         */
	}
}
?>