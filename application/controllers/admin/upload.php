<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller
{
    var $limit=10;
	var $offset=10;

    public function __construct() {
        parent::__construct();
        $this->load->model('mupload'); //load model mupload yang berada di folder model
        $this->load->helper(array('url')); //load helper url 

    }

	public function index($page=NULL,$offset='',$key=NULL)
	{
        $data['titel']='Upload CodeIgniter'; //varibel title
        
        $data['query'] = $this->mupload->get_allimage(); //query dari model
        
        $this->load->view('admin/vupload',$data); //tampilan awal ketika controller upload di akses
	}
    public function add() {
	    
        $data['titel']='Form Upload CodeIgniter'; //varibel title
        
        //view yang tampil jika fungsi add diakses pada url
       
       $this->load->view('admin/index1', $data);
         $this->load->view('/admin/fupload',$data);
        $this->load->view('admin/index2', $data);
    }
    public function insert(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                  
                );

                $this->mupload->get_insert($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('admin/upload/lihat'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('admin/upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }
    public function lihat() {
        
        
        
       
       $data['galeri'] = $this->mupload->get_allimage()->result();
      

       $this->load->view('admin/index1', $data);
         $this->load->view('/admin/v_galeri',$data);
        $this->load->view('admin/index2', $data);

    }
     function hapusfoto($id){      
        $where = array('id' => $id);
        $this->mupload->hapus_foto($where,'galeri');
        redirect('admin/upload/lihat');
        
        
        
     }
}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */