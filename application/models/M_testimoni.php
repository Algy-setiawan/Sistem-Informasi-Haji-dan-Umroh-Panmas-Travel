<?php 

class M_testimoni extends CI_Model{
	
	var $tabel = 'testimoni';

	function tampil_data($where,$table){
	
	
	return $this->db->get_where($table,$where);

	}

function tampil_join($where){
	$this->db->select('*');
	$this->db->from('testimoni');
	$this->db->join('pelanggan', 'testimoni.id_user = pelanggan.id_user');
	$this->db->where($where);
 $query =  $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $hasilTransaksi[] = $data;
            }

        return $hasilTransaksi; //hasil dari semua proses ada dimari
        }
 

	}
	function tampil_joinn(){
	$this->db->select('*');
	$this->db->from('testimoni');
	$this->db->join('pelanggan', 'testimoni.id_user = pelanggan.id_user');
	
 $query =  $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $hasilTransaksi[] = $data;
            }

        return $hasilTransaksi; //hasil dari semua proses ada dimari
        }
 

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