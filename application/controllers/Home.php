<?php
class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

		if($this->session->userdata('login') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data = array(
            'judul' => 'Beranda',
            'content' => 'home/index',
        );
        $this->load->view('layout/layout',$data);
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
