<?php
class Mupload extends CI_Model {

    var $tabel = 'galeri';

    function __construct() {
        parent::__construct();
    }
    
    //fungsi untuk menampilkan semua data dari tabel database
	function get_allimage() {
        $this->db->order_by('id', 'ASC');
    return $this->db->get('galeri');
}

    //fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }

    function hapus_foto($data,$table){
    $this->db->delete($table,$data);
    }

}

?>
