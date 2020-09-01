<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Password extends CI_Controller{

public function __construct(){
		parent::__construct();
		$this->load->model('M_password');               
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
		$data['user'] = $this->M_password->edit_data($where,'user')->result();
		$this->load->view('user/index1', $data);
		$this->load->view('user/v_password', $data);
		$this->load->view('user/index2', $data);


	}

	 	 function editpassword(){		
        $where = array('id_user' => $_SESSION['id_user']);
        $data['user'] = $this->M_password->edit_data($where,'user')->result();
		
		$this->load->view('user/index1', $data);
		$this->load->view('user/v_password',$data);
		$this->load->view('user/index2', $data);
		
		
		
	 }
	 public function updatepassword(){
		
		
		$password = md5($this->input->post('password'));
		
		$data = array(
			

			'password' => $password,

			
		);
		$where = array('id_user' => $_SESSION['id_user']);
                $this->M_password->update_data($where,$data,'user');
		redirect('user/Home/logout');
	}

}