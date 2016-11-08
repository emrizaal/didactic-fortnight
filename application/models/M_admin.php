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
}

?>