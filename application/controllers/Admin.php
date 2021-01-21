<?php 

/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_driver', 'M_pengiklan','M_kendaraan','M_login'));


		if (empty($this->session->userdata('status'))) {

			redirect('Login');
		}

		# code...
	}

	// public function index(){


	// 	$data['pengiklan']=$this->M_pengiklan->getall()->result();
	// 	$data['driver']=$this->M_driver->getall()->result();
	// 	$data['kendaraan']=$this->M_kendaraan->getall()->result();
	// 	$this->load->view('admin/dashboard',$data);
	// }


	// DRIVER
	public function tampildatadriver(){
		$data['driver']=$this->M_driver->getall()->result();
		$this->load->view('admin/driver/tampildatadriver',$data);
	}
	public function tambahdriver(){

		$this->load->view('admin/driver/formtambahdriver');
	}

	public function aksitambahdriver(){

		$namaDriver=$this->input->post('namaDriver');
		$noTelpon=$this->input->post('noTelpon');
		$alamat=$this->input->post('alamat');
		$pekerjaan=$this->input->post('pekerjaan');

		

		$config['upload_path']      ='./gambar/driver';
        $config['allowed_types']    ='gif|jpg|png|jpeg';
        
        $config['encrypt_name']         = TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('fotoSim'))
		{		$this->session->set_flashdata('eror','foto gagal diUpload');
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/driver/formtambahdriver', $error);
		}
		else
		{
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data = array(
						'namaDriver'=>$namaDriver,
						'noTelpon'=>$noTelpon,
						'alamat'=>$alamat,
						'pekerjaan'=>$pekerjaan,
						'fotoSim'=>$this->upload->data("file_name"));
		$this->M_driver->insertdriver($data);
		$this->session->set_flashdata('simpan','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil diSimpan
	                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('tampildatadriver');
		}
	}
	public function editdriver($id){

		$data['driver']=$this->M_driver->getbyid($id)->row();
		$this->load->view('admin/driver/formeditdriver',$data);
	}
	public function aksieditdriver(){

		$idDriver=$this->input->post('idDriver');
		$namaDriver=$this->input->post('namaDriver');
		$noTelpon=$this->input->post('noTelpon');
		$alamat=$this->input->post('alamat');
		$pekerjaan=$this->input->post('pekerjaan');
		

		$config['upload_path']		='./gambar/driver';
		$config['allowed_types']	='gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('fotoSim'))
		{ 	
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data = array('idDriver'=>$idDriver,
						'namaDriver'=>$namaDriver,
						'noTelpon'=>$noTelpon,
						'alamat'=>$alamat,
						'pekerjaan'=>$pekerjaan);
		$this->M_driver->updatedriver($data,$idDriver);
		$this->session->set_flashdata('edit','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil diUbah
	                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('tampildatadriver');
		}else if ($this->upload->do_upload('fotoSim')) {

			$data['nama_berkas'] = $this->upload->data("file_name");
			$data = array('idDriver'=>$idDriver,
						'namaDriver'=>$namaDriver,
						'noTelpon'=>$noTelpon,
						'alamat'=>$alamat,
						'pekerjaan'=>$pekerjaan,
						'fotoSim'=>$this->upload->data("file_name"));
		$this->M_driver->updatedriver($data,$idDriver);
		$this->session->set_flashdata('edit','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil diUbah
	                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('tampildatadriver');
		}
		else
		{$idDriver=$this->input->post('idDriver');
				$this->session->set_flashdata('error','Data gagal di update');
				redirect('Admin/editdriver/'.$idDriver);
			
		}


	}

	public function deletedriver($id)
	{
	
	$cek=$this->M_driver->cekdriver($id)->num_rows();
	$cekiklan=$this->M_driver->cekiklan($id)->num_rows();
	if ($cek>0 || $cekiklan>0) {
		 $this->session->set_flashdata('cek','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data sedang digunakan pada tabel lain
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		
		 redirect('tampildatadriver');
	}
	else if ($cek==0){
	  $this->session->set_flashdata('hapus','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil dihapus
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
	  $this->M_driver->deletedriver($id);
	redirect('tampildatadriver');
	}else{
		 $this->session->set_flashdata('gagal','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Gagal dihapus
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		  redirect('tampildatadriver');
	}
	}

	// Kendaraan
	public function tampildatakendaraan(){
		$data['kendaraan']=$this->M_kendaraan->getall()->result();
		$this->load->view('admin/kendaraan/tampildatakendaraan',$data);
	}
	public function tambahkendaraan(){
		$data['driver']=$this->M_driver->getall()->result();
		$data['merk']=$this->M_kendaraan->getmerk()->result();
		$this->load->view('admin/kendaraan/formtambahkendaraan',$data);
	}


	public function aksitambahkendaraan(){
		$idDriver=$this->input->post('idDriver');
		$merk=$this->input->post('merk');
		$type=$this->input->post('type');
		$nopol=$this->input->post('nopol');
		$tahunKendaraan=$this->input->post('tahunKendaraan');
		
			$data = array(
						'idDriver'=>$idDriver,
						'idMerk'=>$merk,
						'idType'=>$type,
						'nopol'=>$nopol,
						'tahunKendaraan'=>$tahunKendaraan);
		$this->M_kendaraan->insertkendaraan($data);
		$this->session->set_flashdata('simpan','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil diSimpan
	                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('tampildatakendaraan');
		
	}
	public function editkendaraan($id){
		$data['driver']=$this->M_driver->getall()->result();
		$data['kendaraan']=$this->M_kendaraan->getbyid($id)->row();
		$data['merk']=$this->M_kendaraan->getmerk()->result();
		$this->load->view('admin/kendaraan/formeditkendaraan',$data);
	}
	public function aksieditkendaraan(){
		$idKendaraan=$this->input->post('idKendaraan');
		$idDriver=$this->input->post('idDriver');
		$merk=$this->input->post('merk');
		$type=$this->input->post('type');
		$nopol=$this->input->post('nopol');
		$tahunKendaraan=$this->input->post('tahunKendaraan');
		
			$data = array(
						'idDriver'=>$idDriver,
						'idMerk'=>$merk,
						'idType'=>$type,
						'nopol'=>$nopol,
						'tahunKendaraan'=>$tahunKendaraan);
			
		$this->M_kendaraan->updatekendaraan($data,$idKendaraan);
		$this->session->set_flashdata('edit','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil diUbah
	                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('tampildatakendaraan');
	}

	public function deletekendaraan($id)
	{
	// if (!isset($id))
	//  show_404();
	$this->M_kendaraan->deletekendaraan($id);
	if ($this->db->affected_rows()) {
	  $this->session->set_flashdata('hapus','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil dihapus
	                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
	redirect('tampildatakendaraan');
	}else{
		 $this->session->set_flashdata('gagal','Data Gagal dihapus');
	}
	}

	public function gettype(){
		$idMerk=$this->input->post('id',TRUE);
		$data=$this->M_kendaraan->gettype($idMerk)->result();
		  echo json_encode($data);
	}

	// Karyawan
	
	public function tampildatakaryawan(){
		$data['karyawan']=$this->M_login->getall()->result();
		$this->load->view('admin/karyawan/tampildatakaryawan',$data);
	}
	public function tambahkaryawan(){
		if ($this->session->userdata('level')=='karyawan') {
			redirect('Login');
		}
		$this->load->view('admin/karyawan/formtambahkaryawan');
	}

	public function aksitambahkaryawan(){
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
		
		
			$data = array(
						'id'=>$id,
						'nama'=>$nama,
						'username'=>$username,
						'password'=>$password,
						'level'=>$level);
		$this->M_login->insertkaryawan($data);
		$this->session->set_flashdata('simpan','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil diSimpan
	                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('tampildatakaryawan');
		
	}
	public function editprofile($id){
		$data['karyawan']=$this->M_login->getbyid($id)->row();
		$this->load->view('admin/karyawan/formeditkaryawan',$data);
	}
	public function aksieditkaryawan(){
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
			$data = array(
						'id'=>$id,
						'nama'=>$nama,
						'username'=>$username,
						'password'=>$password);
		$this->M_login->updatekaryawan($data,$id);
		$this->session->set_flashdata('edit','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil di Ubah
	                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('logout');
		


	}

	public function deletekaryawan($id)
	{
	// if (!isset($id))
	//  show_404();
	$this->M_login->deletekaryawan($id);
	if ($this->db->affected_rows()) {
	  $this->session->set_flashdata('hapus','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil dihapus
	                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
	redirect('tampildatakaryawan');
	}else{
		 $this->session->set_flashdata('gagal','Data Gagal dihapus');
	}
	}


}

 ?>