<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cetak extends CI_Controller{

public function __construct(){
		parent::__construct();
		$this->load->model('M_cetak');               
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
		$where = array('pemesanan.id_user' => $_SESSION['id_user']);
		$data['jadwal'] = $this->M_cetak->tampil_jadwal()->result();
		$data['pelanggan'] = $this->M_cetak->tampil_pelanggan('pelanggan')->result();
		$data['hasilTransaksi'] = $this->M_cetak->tampil_join($where,'pemesanan');
		


		$this->load->view('user/v_cetak', $data);
		


	}


}