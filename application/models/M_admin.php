<?php

class M_admin extends CI_Model {

	function getAllUstadz(){
		$query=$this->db->query("SELECT * from ustadz")->result_array();
		return $query;
	}

	function saveUstadz($p){
		$query=$this->db->query("INSERT into ustadz(nama,profil,foto) values('$p[nama]','$p[profil]','$p[foto]')");
		return $query;
	}

	function adminAuth($username, $password) {
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));

		$auth = $this->db->get()->result();
		if (is_array($auth) && count($auth)==1) {
			$this->session->set_userdata(array(
				'username'=>$username,
				'isLoggedIn'=>true
			));
			return true;
		}
		else {
			return false;
		}

	}
}
?>
