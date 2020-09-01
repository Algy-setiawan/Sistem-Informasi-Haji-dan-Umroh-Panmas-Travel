<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DataPelanggan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mupload'); 
		$this->load->model('M_datapelanggan');  
		 $this->load->helper(array('form', 'url'));            
	if ($this->session->userdata('username')=="") {
			redirect('home');
		}elseif($this->session->userdata('level') == 'adm'){
			redirect('admin/Home');
		}
	}
	public
	 function index() {
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$where = array('id_user' => $_SESSION['id_user']);
		$data['pelanggan'] = $this->M_datapelanggan->tampil_data_user($where,'pelanggan')->result();

		$this->load->view('user/index1', $data);
		$this->load->view('user/v_datapelanggan', $data);
		$this->load->view('user/index2', $data);
		


	}
	public function TambahDataPelanggan(){	
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20480'; //maksimum besar file 2M
        $config['max_width']  = '12880'; //lebar maksimum 1288 px
        $config['max_height']  = '7680'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
		
        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'photo' =>$gbr['file_name'],
                  'nama' =>$this->input->post('nama'),
                  'jk' =>$this->input->post('jk'),
                  'tgl_lhr' =>$this->input->post('tgl_lhr'),
                  'no_tlp' =>$this->input->post('no_tlp'),
                  'alamat' =>$this->input->post('alamat'),
                  'id_user' =>$this->input->post('id_user')
             
                  
                );
                $this->M_datapelanggan->tambah_data($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('user/DataPelanggan'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('user/DataPelanggan'); //jika gagal maka akan ditampilkan form upload
            }
        }else{


       		$nama = $this->input->post('nama');
			$jk = $this->input->post('jk');
			$tgl_lhr = $this->input->post('tgl_lhr');
			$no_tlp = $this->input->post('no_tlp');
			$alamat = $this->input->post('alamat');
			$photo = $this->input->post('photo');
			$id_user = $this->input->post('id_user');
			$data = array(
			
			'nama' => $nama,
			'id_user' => $id_user,
			'jk' => $jk,
			'tgl_lhr' => $tgl_lhr,
			'no_tlp' => $no_tlp,
			'alamat' => $alamat,
			'photo' => $config ['gambar']='default.png'
			
		);
		
                $this->M_datapelanggan->tambah_data($data);
				redirect('user/DataPelanggan');
		}
		
		
	 }
	 function hapusdatapelanggan($id){		
        $where = array('id' => $id);
		$this->M_datapelanggan->hapus_data($where,'pelanggan');
		redirect('user/datapelanggan');
		
		
		
	 }

	 function editdatapelanggan($id){		
        $where = array('id' => $id);
        $data['pelanggan'] = $this->M_datapelanggan->edit_data($where,'pelanggan')->result();
		
		$this->load->view('user/index1', $data);
		$this->load->view('user/v_editdatapelanggan',$data);
		$this->load->view('user/index2', $data);
		
		
		
	 }

	 function updatedatapelanggan(){		
       $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20480'; //maksimum besar file 2M
        $config['max_width']  = '12880'; //lebar maksimum 1288 px
        $config['max_height']  = '7680'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
		
        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'photo' =>$gbr['file_name'],
                  'id' =>$this->input->post('id'),
                  'nama' =>$this->input->post('nama'),
                  'jk' =>$this->input->post('jk'),
                  'tgl_lhr' =>$this->input->post('tgl_lhr'),
                  'no_tlp' =>$this->input->post('no_tlp'),
                  'alamat' =>$this->input->post('alamat')
             
                  
                );

                $where = array(
                	'id'=>$this->input->post('id') 
                );
                $this->M_datapelanggan->update_data($where,$data,'pelanggan'); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('user/DataPelanggan'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('user/DataPelanggan'); //jika gagal maka akan ditampilkan form upload
            }
		}else{


       		$nama = $this->input->post('nama');
			$jk = $this->input->post('jk');
			$tgl_lhr = $this->input->post('tgl_lhr');
			$no_tlp = $this->input->post('no_tlp');
			$alamat = $this->input->post('alamat');
			$data = array(
			'nama' => $nama,
			'jk' => $jk,
			'tgl_lhr' => $tgl_lhr,
			'no_tlp' => $no_tlp,
			'alamat' => $alamat

		);
		$where = array(
                	'id'=>$this->input->post('id') 
                );
                $this->M_datapelanggan->update_data($where,$data,'pelanggan');
		redirect('user/DataPelanggan');
		}
		
		
		
	 }


		 function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id');
		session_destroy();
		redirect('home');
	}

		


}
