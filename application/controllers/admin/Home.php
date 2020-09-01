<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();            
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
		$this->load->view('admin/index1', $data);
		$this->load->view('admin/v_home', $data);
		$this->load->view('admin/index2', $data);


	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('home');
	}



}
