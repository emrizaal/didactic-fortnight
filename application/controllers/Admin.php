<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		echo "ini halaman admin";
	}

	public function ustadz(){
		$data['data']=$this->m_admin->getAllUstadz();
		$this->load->view("admin/ustadz",$data);
	}

	public function addUstadz(){
		$this->load->view("admin/add_ustadz");
	}

	public function saveUstadz(){
		$config['upload_path']   =   "assets/img/foto/";
		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		$config['max_size']      =   "5000";
		$config['max_width']     =   "1907";
		$config['max_height']    =   "1280";
		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('fupload')){
			echo $this->upload->display_errors();
		}else{
			$finfo=$this->upload->data();
			$p = $this->input->post();
			$p['foto'] = $finfo['file_name'];

			$res = $this->m_admin->saveUstadz($p);
			if($res)redirect("admin/ustadz");
		}
	}
}

?>