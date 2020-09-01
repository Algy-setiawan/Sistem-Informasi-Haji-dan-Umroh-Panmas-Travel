<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {
	
	function __construct(){

		parent::__construct();
		$this->load->model('M_registrasi');
		$this->load->helper('url');
	}

	public function index(){		
		$data['judul'] = "Halaman depan";
		
		$this->load->view('v_index_head',$data);
		
		$this->load->view('v_registrasi',$data);
		$this->load->view('v_footer',$data);
	}
	public function registrasi(){		
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');
		
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'level' => $level
			
		);
		$this->M_registrasi->tambah_data($data,'user');
		redirect('home');
	}
}