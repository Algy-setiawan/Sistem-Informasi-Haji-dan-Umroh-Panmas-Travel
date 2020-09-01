<?php 

class M_registrasi extends CI_Model{
	
	var $tabel = 'user';



	function tambah_data($data,$table){
	$this->db->insert($this->tabel, $data);
       return TRUE;
	}
	
}