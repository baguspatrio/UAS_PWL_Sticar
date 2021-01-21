<?php 


/**
  * 
  */
 class PengiklanLogin extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_pengiklan');
 	}

 	public function index(){
 		
 		$this->load->view('loginpengiklan');
 	}

 	public function aksilogin(){

 		$username=$this->input->post('username');
 		$password=$this->input->post('password');

 		$cek=$this->M_pengiklan->ceklogin($username,$password);

 		if ($cek->num_rows()>0) {
 			$data=$cek->row_array();
 			$id=$data['idPengiklan'];
 			$namaPengiklan=$data['namaPengiklan'];
 			$datasession = array(
 				'idPengiklan'=>$id,
 				'username' =>$username ,
 				'namaPengiklan'=>$namaPengiklan,
 				'status'=>'login' );

 			$this->session->set_userdata($datasession);
 			redirect('dashboard');

 	}else{
 		$this->session->set_flashdata('gagallogin','<div class="alert alert-danger text-center">Username atau password salah</div>');
 		redirect('login');
 	}
 }
 public function logout(){

		$this->session->sess_destroy();
		redirect(base_url());
	}

}

 ?>