<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		$this->login_check();

		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/dashboard',$data);
	}

	public function login_check() {
		if (!$this->session->userdata('isLoggedIn')) {
			redirect('admin/show_login');
		}
	}

	public function show_login($show_error = false) {
		$data['error'] = $show_error;

		$this->load->helper('form');
		$this->load->view('admin/login',$data);
	}

	public function login_admin() {
		$this->load->model('m_admin');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->m_admin->adminAuth($username, $password)) {
			redirect('admin/index');
		}
		else {
			$this->show_login(true);
		}
	}

	public function logout_admin() {
		$this->session->sess_destroy();
		redirect('admin/index');
	}

	public function ustadz(){
		$this->login_check();
		$data['data']=$this->m_admin->getAllUstadz();
		$this->load->view("admin/ustadz",$data);
	}

	public function addUstadz(){
		$this->login_check();
		$this->load->view("admin/add_ustadz");
	}

	public function saveUstadz(){
		$this->login_check();
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
