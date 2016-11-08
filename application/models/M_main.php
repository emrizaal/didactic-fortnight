<?php

class M_main extends CI_Model {

	function getTanggal(){
		$query = $this->db->query("SELECT tanggal from materi group by tanggal")->result_array();
		return $query;
	}

	function getAllMateri(){
		$query = $this->db->query("SELECT * from materi")->result_array();
		return $query;
	}

	function getAdmin($p){
		$query = $this->db->query("SELECT * from admin where username = '$p[username]' AND password = MD5('$p[password]')")->row_array();
		return $query;
	}

	function insertTausiyah($p){
		$query = $this->db->query("INSERT into materi(
			judul,
			ustadz,
			preview,
			isi,
			sumber,
			urutan_tampil
			)values(
			'$p[judul]',
			'$p[ustad]',
			'$p[preview]',
			'$p[isi]',
			'$p[sumber]',
			'$p[urutan]'
			)");
		return $query;
	}

	function getMateriPerPage($limit,$total){
		$query = $this->db->query("SELECT * from materi ORDER BY id_materi DESC limit $limit,$total")->result_array();
		return $query;
	}

	function editUrutan($p){
		$query = $this->db->query("UPDATE materi set 
			urutan_tampil = '$p[urutan]'
			where id_materi = '$p[id]'
			");
		return $query;
	}
	
}

?>