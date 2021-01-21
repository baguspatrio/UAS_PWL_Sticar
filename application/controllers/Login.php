<?php 


/**
  * 
  */
 class Login extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_login');
 	}

 	public function index(){
 		$this->load->view('login');
 	}

 	public function aksilogin(){

 		$username=$this->input->post('username');
 		$password=$this->input->post('password');

 		$cek=$this->M_login->ceklogin($username,$password);

 		if ($cek->num_rows()>0) {
 			$data=$cek->row_array();
 			$id=$data['id'];
 			$nama=$data['nama'];
 			$level=$data['level'];
 			$datasession = array(
 				'id'=>$id,
 				'username' =>$username ,
 				'nama'=>$nama,
 				'level'=>$level,
 				'status'=>'login' );

 			$this->session->set_userdata($datasession);
 			redirect('admin');

 	}else{
 		$this->session->set_flashdata('gagallogin','<div class="alert alert-danger text-center">Username atau password salah</div>');
 		redirect('Login');
 	}
 }
 public function logout(){

		$this->session->sess_destroy();
		redirect('Login');
	}

}

 ?>