<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		echo "ini halaman admin";
	}

	public function ustadz(){
		$data['data']=$this->m_admin->getAllUstadz();
		$this->load->view("ustadz",$data);
	}
}

?>