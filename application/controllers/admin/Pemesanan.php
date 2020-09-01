<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pemesanan extends CI_Controller{

public function __construct(){
		parent::__construct();
		$this->load->model('M_pemesananadmin');               
		if ($this->session->userdata('username')=="") {
			redirect('home');
		}elseif($this->session->userdata('level') == "usr"){
			redirect('user/home');
		}
	}
	public function index() {
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$data['jadwal'] = $this->M_pemesananadmin->tampil_jadwal()->result();
		$data['pelanggan'] = $this->M_pemesananadmin->tampil_pelanggan('pelanggan')->result();
		$data['hasilTransaksi'] = $this->M_pemesananadmin->tampil_join();
		$this->load->view('admin/index1', $data);
		$this->load->view('admin/v_pemesanan', $data);
		$this->load->view('admin/index2', $data);


	}

	public function TambahPemesanan(){		
		$nama = $this->input->post('nama');
		$id_user = $this->input->post('id_user');
		$id_jadwal = $this->input->post('id_jadwal');
		$tgl_pesan = $this->input->post('tgl_pesan');
		
		$data = array(
			'nama' => $nama,
			'id_user' => $id_user,
			'id_jadwal' => $id_jadwal,
			'tgl_pesan' => $tgl_pesan
			
			
		);
		$this->M_pemesananadmin->tambah_data($data,'pemesanan');
		redirect('admin/pemesanan');

}
		 function hapuspemesanan($id_pemesanan){		
        $where = array('id_pemesanan' => $id_pemesanan);
		$this->M_pemesananadmin->hapus_data($where,'pemesanan');
		redirect('admin/pemesanan');
	}

	 function editpemesanan($id_pemesanan){		
        $where = array('id_pemesanan' => $id_pemesanan);
        $data['pemesanan'] = $this->M_pemesananadmin->edit_data($where,'pemesanan')->result();
		$data['jadwal'] = $this->M_pemesananadmin->tampil_jadwal()->result();
		$this->load->view('admin/index1', $data);
		$this->load->view('admin/v_editpemesanan',$data);
		$this->load->view('admin/index2', $data);
		
		
		
	 }
	 public function UpdatePemesanan(){
	 	$id_pemesanan = $this->input->post('id_pemesanan');
		$nama = $this->input->post('nama');
		$tgl_pesan = $this->input->post('tgl_pesan');
		$id_jadwal = $this->input->post('id_jadwal');
		
		$data = array(
			'id_pemesanan' => $id_pemesanan,
			'nama' => $nama,
			'tgl_pesan' => $tgl_pesan,
			'id_jadwal' => $id_jadwal
			
			
		);
		$where = array(
                	'id_pemesanan'=>$this->input->post('id_pemesanan') 
                );
                $this->M_pemesananadmin->update_data($where,$data,'pemesanan');
		redirect('admin/pemesanan');
	}

}