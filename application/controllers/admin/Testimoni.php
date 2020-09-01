<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Testimoni extends CI_Controller{

public function __construct(){
		parent::__construct();
		$this->load->model('M_testimoni');
		$this->load->model('M_testimoni_admin');                
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
		$data['hasiltransaksi'] = $this->M_testimoni->tampil_joinn();
		$this->load->view('admin/index1', $data);
		$this->load->view('admin/v_testimoni', $data);
		$this->load->view('admin/index2', $data);


	}

	public function TambahTestimoni(){		
		$nama = $this->input->post('nama');
		$tanggal = $this->input->post('tanggal');
		$isi_testimoni = $this->input->post('isi_testimoni');
		
		$data = array(
			'nama' => $nama,
			'tanggal' => $tanggal,
			'isi_testimoni' => $isi_testimoni,
			
			
		);
		$this->M_testimoni_admin->tambah_data($data,'testimoni');
		redirect('admin/testimoni');
	}
		 function hapustestimoni($id_testimoni){		
        $where = array('id_testimoni' => $id_testimoni);
		$this->M_testimoni_admin->hapus_data($where,'testimoni');
		redirect('admin/testimoni');
		
		
		
	 }
	 function edittestimoni($id_testimoni){		
        $where = array('id_testimoni' => $id_testimoni);
        $data['testimoni'] = $this->M_testimoni_admin->edit_data($where,'testimoni')->result();
		
		$this->load->view('admin/index1', $data);
		$this->load->view('admin/v_edittestimoni',$data);
		$this->load->view('admin/index2', $data);
		
		
		
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
                $this->M_testimoni_admin->update_data($where,$data,'testimoni');
		redirect('admin/testimoni');
	}

}