<?php
class CLogin extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		if($this->session->userdata('login') == "login"){
			redirect(base_url("home"));
		}
	}
 
	function index(){
		$this->load->view('login/login');
	}
    
 
	function act(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$cek = $this->m_login->cek_login($username,$password);
//		$ceks = $this->m_login->cek_login($where)->row();
		if($cek==3){
            $data = $this->m_login->data_login($username);
            $this->session->set_userdata('login', 'login');
            $this->session->set_userdata('login_data', $data);
			redirect(base_url("home"));
        }else if($cek==2){
            $this->session->set_userdata('sts', 'Password salah');
            redirect(base_url("login"));
        }else if($cek==1){
            $this->session->set_userdata('sts', 'Nomor Induk tidak ditemukan');
            redirect(base_url("login"));
        }else{
            redirect(base_url("login"));
        }
	}
 
}