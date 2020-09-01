<?php 

class M_berita extends CI_Model{
	
	var $tabel = 'berita';

	function tampil_data(){
	$this->db->order_by('tanggal', 'ASC');
	return $this->db->get('berita');

	}
	function tampil_dataa(){
	$this->db->order_by('tanggal', 'ASC');
	$this->db->limit('6');
	return $this->db->get('berita');
	
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