<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //load Login_model.php  
    $this->load->model('login_model');
    //check the username is already set up or not
    if ($this->session->userdata('username')) {
      //if username is already set up, then check the level of username is admin or member
      if($this->session->userdata('level') == 'adm'){
        redirect('admin/home');
      }elseif($this->session->userdata('level') == 'usr'){
        redirect('user/home');
      }
    }
  }

  public function index(){
    $data = array('error' => ''
          );
    $this->load->view('v_index_body2', $data);
  }

  //function for processing login form
  public function login_process(){
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
          //calling chech_user() function in Login_model.php
    $result = $this->login_model->check_user($username, $password); 

    if($result->num_rows() > 0){
      foreach ($result->result() as $row) {
        $id_user = $row->id_user;
        $username = $row->username;
        $level = $row->level;
         $nama = $row->nama;
      }

      $newdata = array(
              'id_user'  => $id_user,
              'username' => $username,
              'level' => $level,
              'nama' => $nama,
              'logged_in' => TRUE
      );
      
      //set up session data
      $this->session->set_userdata($newdata);
      if($this->session->userdata('level')=='adm') {
        redirect('admin/home');
      }elseif ($this->session->userdata('level')=='usr') {
        redirect('user/home');
      }
    }else{

$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Gagal Login !!</div></div>");
      redirect('home');
    }
  }

  public function register(){
    $data = array('error' => ''
          );
    $this->load->view('v_registrasi', $data);
  }
}