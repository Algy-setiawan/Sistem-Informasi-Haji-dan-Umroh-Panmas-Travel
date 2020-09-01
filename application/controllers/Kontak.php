	<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	$this->load->helper('url');
}
		public function index(){		

		$this->load->view('v_index_head');
		$this->load->view('v_corrousel');
		$this->load->view('v_kontak');
		$this->load->view('v_footer');

	}
}