<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_profile');  
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
		$where = array('nama' => $_SESSION['nama']);
		$data['pelanggan'] = $this->M_profile->tampil_data($where,'pelanggan')->result();
		$this->load->view('user/index1', $data);
		$this->load->view('user/v_profile', $data);
		$this->load->view('user/index2', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('home');
	}
}