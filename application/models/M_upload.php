<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_upload extends CI_Model {
 
	function __construct() {
        parent::__construct();
    }
 
	function M_notice (){
		parent::Model();
	}
	function insertNotices($arrayOfNoticeFiles){
		$tableName  = "t_notices";
		$inputArray = $arrayOfNoticeFiles;
 
		$data = array(
			'document_foldername'				=> $inputArray["document_foldername"],
			'document_filename'					=> $inputArray["document_filename"]
		);
 
		$this->db->insert($tableName, $data); 
	}
 
 
}
 