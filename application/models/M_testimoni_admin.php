<?php 

class M_testimoni_admin extends CI_Model{
	
	var $tabel = 'testimoni';


		function tampil_data(){
	$this->db->order_by('nama', 'ASC');
	return $this->db->get('testimoni');

	}
			function tampil_dataa(){
	$this->db->order_by('nama', 'ASC');
	$this->db->limit('');
	return $this->db->get('testimoni');
	
	}

	function tambah_data($data,$table){
	$this->db->insert($this->tabel, $data);
       return TRUE;
	}
	function hapus_data($data,$table){
	$this->db->delete($table,$data);
	}
	function edit_data($where,$table){
	return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
	$this->db->where($where);
	$this->db->update($table,$data);
}
}