<?php 

Class Fungsi {

	protected $ci;

	function __construct(){
		$this->ci=& get_instance();
	}

	function user_login(){
		$this->ci->load->model('M_login');
		$adminlevel=$this->ci->session->userdata('level');
		$admin=$this->ci->nama->get($adminlevel)->row();
		return $admin;
	}
}

 ?>