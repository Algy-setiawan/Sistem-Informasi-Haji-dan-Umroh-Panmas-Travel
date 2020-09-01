<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_jadwal');
		$this->load->model('M_berita');
		$this->load->model('M_testimoni');
		$this->load->model('mupload');
	}

	public function index(){	

		$data['jadwal'] = $this->M_jadwal->tampil_dataa()->result();
		$data['berita'] = $this->M_berita->tampil_dataa()->result();
		$data['hasiltransaksi'] = $this->M_testimoni->tampil_joinn();
		$data['galeri'] = $this->mupload->get_allimage()->result();
		$this->load->view('v_index_head',$data);
		$this->load->view('v_galeri',$data);
		
		$this->load->view('v_footer',$data);
	}
	public function registrasi(){		
		$data['judul'] = "Halaman depan";
		
		$this->load->view('v_index_head',$data);
		
		$this->load->view('v_registrasi',$data);
		$this->load->view('v_footer',$data);
	}
}