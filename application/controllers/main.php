<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function main(){ //Apapun yg ada dalam method ini dieksekusi ketika controller Main dipanggil
		parent::__construct();

		$this->load->model("m_main"); // Memanggil model "m_main"
	}

	public function index(){
		$tgl = $this->m_main->getTanggal();
		$new = array();
		foreach ($tgl as $a) {
			$a = array(
				"title" => "Tausiyah",
				"start" => $a['tanggal']
				);
			array_push($new, $a);
		}
		
		$data['tgl']=$new;
		$data['materi']=$this->m_main->getMateriPerPage(0,3);
		$this->load->view('index',$data);
	}

	function auth(){
		$res = $this->m_main->getAdmin($this->input->post());
		$this->session->set_userdata($res);
		redirect("main");
	}

	function tambah_tausiyah(){
		$this->load->view("tambah_tausiyah");
	}

	function add_tausiyah(){
		$res= $this->m_main->insertTausiyah($this->input->post());
		redirect("main/#materi");
	}

	function daftar_tausiyah(){
		$data['materi']=$this->m_main->getAllMateri();
		$this->load->view("daftar_tausiyah",$data);
	}

	function edit_urutan(){
		$res = $this->m_main->editUrutan($this->input->post());
		redirect("main/daftar_tausiyah");
	}

	function getMateri($page){
		$data['materi']=$this->m_main->getMateriPerPage(($page-1)*3,3);
		$this->load->view("v_materi",$data);
	}
	
	
	
}
