<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pemesanan extends CI_Controller{

public function __construct(){
		parent::__construct();
		$this->load->model('M_pemesanan');               
		if ($this->session->userdata('username')=="") {
			redirect('home');
		}elseif($this->session->userdata('level') == 'adm'){
			redirect('admin/Home');
		}
	}

	public function index() {
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$where = array('id_user' => $_SESSION['id_user']);
		$data['hasilTransaksi'] = $this->M_pemesanan->tampil_join($where,'pemesanan');
		$data['jadwal'] = $this->M_pemesanan->tampil_jadwal()->result();
		$data['pelanggan'] = $this->M_pemesanan->tampil_pelanggan($where,'pelanggan')->result();
		$this->load->view('user/index1', $data);
		$this->load->view('user/v_pemesanan', $data);
		$this->load->view('user/index2', $data);


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
		$this->M_pemesanan->tambah_data($data,'pemesanan');
		redirect('user/pemesanan');
	}

		 function hapuspemesanan($id_pemesanan){		
        $where = array('id_pemesanan' => $id_pemesanan);
		$this->M_pemesanan->hapus_data($where,'pemesanan');
		redirect('user/pemesanan');
		
		
		
	 }
	 function editpemesanan($id_pemesanan){		
        $where = array('id_pemesanan' => $id_pemesanan);
        $data['pemesanan'] = $this->M_pemesanan->edit_data($where,'pemesanan')->result();
		$data['jadwal'] = $this->M_pemesanan->tampil_jadwal()->result();
		$this->load->view('user/index1', $data);
		$this->load->view('user/v_editpemesanan',$data);
		$this->load->view('user/index2', $data);
		
		
		
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
                $this->M_pemesanan->update_data($where,$data,'pemesanan');
		redirect('user/pemesanan');
	}

}