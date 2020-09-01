<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class jadwal extends CI_Controller{

public function __construct(){
		parent::__construct();
		$this->load->model('M_jadwal');               
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
		$data['jadwal'] = $this->M_jadwal->tampil_data()->result();
		$this->load->view('admin/index1', $data);
		$this->load->view('admin/v_jadwal', $data);
		$this->load->view('admin/index2', $data);


	}
	public function tambahjadwal(){

		$kelas = $this->input->post('kelas');
		$nama_paket = $this->input->post('nama_paket');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');
		$fasilitas = $this->input->post('fasilitas');
		$data = array(
			'kelas' => $kelas,
			'nama_paket' => $nama_paket,
			'harga' => $harga,
			'tanggal' => $tanggal,
			'fasilitas' => $fasilitas
		);
		$this->M_jadwal->tambah_data($data,'jadwal');
		redirect('admin/jadwal');
	}
	 
	 function hapusjadwal($id_jadwal){		
        $where = array('id_jadwal' => $id_jadwal);
		$this->M_jadwal->hapus_data($where,'jadwal');
		redirect('admin/jadwal');
		
		
		
	 }
	 	 function editjadwal($id_jadwal){		
        $where = array('id_jadwal' => $id_jadwal);
        $data['jadwal'] = $this->M_jadwal->edit_data($where,'jadwal')->result();
		
		$this->load->view('admin/index1', $data);
		$this->load->view('admin/v_editjadwal',$data);
		$this->load->view('admin/index2', $data);
		
		
		
	 }
	 public function updatejadwal(){

		$kelas = $this->input->post('kelas');
		$nama_paket = $this->input->post('nama_paket');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');
		$fasilitas = $this->input->post('fasilitas');
		$data = array(
			'kelas' => $kelas,
			'nama_paket' => $nama_paket,
			'harga' => $harga,
			'tanggal' => $tanggal,
			'fasilitas' => $fasilitas
		);
		$where = array(
                	'id_jadwal'=>$this->input->post('id_jadwal') 
                );
                $this->M_jadwal->update_data($where,$data,'jadwal');
		redirect('admin/jadwal');
	}

}