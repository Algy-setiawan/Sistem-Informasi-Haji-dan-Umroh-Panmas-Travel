<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class berita extends CI_Controller{
public function __construct(){
		parent::__construct();
		$this->load->model('M_berita');               
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
		$data['berita'] = $this->M_berita->tampil_data()->result();
		$this->load->view('admin/index1', $data);
		$this->load->view('admin/v_berita', $data);
		$this->load->view('admin/index2', $data);


	}
	public function tambahberita(){	
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docx|pdf'; //type yang dapat diakses bisa anda sesuaikan
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
                  'gambar' =>$gbr['file_name'],
               
                  
                  'judul' =>$this->input->post('judul'),
                  'berita' =>$this->input->post('berita'),                
                 'tanggal' =>$this->input->post('tanggal'),
                  
             
                  
                );
                $this->M_berita->tambah_data($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('admin/berita'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('admin/berita'); //jika gagal maka akan ditampilkan form upload
            }
        }

       
		
		
	 }
	 function hapusberita($id_berita){		
        $where = array('id_berita' => $id_berita);
		$this->M_berita->hapus_data($where,'berita');
		redirect('admin/berita');
		
		
		
	 }


}
