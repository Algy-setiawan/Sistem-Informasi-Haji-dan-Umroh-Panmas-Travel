<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Testimoni extends CI_Controller{

public function __construct(){
		parent::__construct();
		$this->load->model('M_testimoni');               
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
		$where = array('testimoni.id_user' => $_SESSION['id_user']);
		$data['hasiltransaksi'] = $this->M_testimoni->tampil_join($where,'testimoni');
		$this->load->view('user/index1', $data);
		$this->load->view('user/v_testimoni', $data);
		$this->load->view('user/index2', $data);


	}

	public function TambahTestimoni(){		
		$nama = $this->input->post('nama');
		$id_user = $this->input->post('id_user');
		$tanggal = $this->input->post('tanggal');
		$isi_testimoni = $this->input->post('isi_testimoni');
		
		$data = array(
			'nama' => $nama,
			'tanggal' => $tanggal,
			'id_user' => $id_user,
			'isi_testimoni' => $isi_testimoni,
			
			
		);
		$this->M_testimoni->tambah_data($data,'testimoni');
		redirect('user/testimoni');
	}

		 function hapustestimoni($id_testimoni){		
        $where = array('id_testimoni' => $id_testimoni);
		$this->M_testimoni->hapus_data($where,'testimoni');
		redirect('user/testimoni');
		
		
		
	 }
	 function edittestimoni($id_testimoni){		
        $where = array('id_testimoni' => $id_testimoni);
        $data['testimoni'] = $this->M_testimoni->edit_data($where,'testimoni')->result();
		
		$this->load->view('user/index1', $data);
		$this->load->view('user/v_edittestimoni',$data);
		$this->load->view('user/index2', $data);
		
		
		
	 }
	 public function UpdateTestimoni(){
	 	$id_testimoni = $this->input->post('id_testimoni');
		$nama = $this->input->post('nama');
		$isi_testimoni = $this->input->post('isi_testimoni');
		$tanggal = $this->input->post('tanggal');
		
		$data = array(
			'id_testimoni' => $id_testimoni,
			'nama' => $nama,
			'isi_testimoni' => $isi_testimoni,
			'tanggal' => $tanggal
			
		);
		$where = array(
                	'id_testimoni'=>$this->input->post('id_testimoni') 
                );
                $this->M_testimoni->update_data($where,$data,'testimoni');
		redirect('user/testimoni');
	}

}