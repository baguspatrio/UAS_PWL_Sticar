<?php 
/**
  * 
  */
 class Iklan extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model(array('M_iklan','M_pengiklan','M_driver','M_kendaraan' ));
 		
		if (empty($this->session->userdata('status'))) {

			redirect('Login');
		}
		
 	}

 	public function index(){
 		
 		$data['iklan']=$this->M_iklan->getall()->result();
 		$data['totaliklan']=$this->M_iklan->hitungiklan();
 		$data['totalpengiklan']=$this->M_iklan->hitungpengiklan();
 		$data['totaldriver']=$this->M_iklan->hitungdriver();
 		$data['totalkendaraan']=$this->M_iklan->hitungkendaraan();
 		$this->load->view('admin/dashboard',$data);
 	}
 	

	
 	
 	public function tambahiklan(){

 		$data['pengiklan']=$this->M_pengiklan->verivikasi()->result();
		$data['driver']=$this->M_driver->getall()->result();
		$data['kendaraan']=$this->M_kendaraan->getall()->result();
		$this->load->view('admin/iklan/formtambahiklan',$data);
	}

	public function aksitambahiklan(){

		$idDriver=$this->input->post('idDriver');
		$idPengiklan=$this->input->post('idPengiklan');
		$tanggal=$this->input->post('tanggal');


		$config['upload_path']		='./gambar/iklan';
		$config['allowed_types']	='gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('fotoKendaraan'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/iklan/formtambahiklan', $error);
		}
		else
		{
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data = array(
						'idDriver'=>$idDriver,
						'idPengiklan'=>$idPengiklan,
						'tanggal'=>$tanggal,
						'fotoKendaraan'=>$this->upload->data("file_name")
						);
		$this->M_iklan->insertiklan($data);
		$this->session->set_flashdata('simpan','Data Berhasil diSimpan');
			redirect('iklan');
		}
	}
	public function editiklan($id){
		$data['pengiklan']=$this->M_pengiklan->verivikasi()->result();
		$data['driver']=$this->M_driver->getall()->result();
		$data['kendaraan']=$this->M_kendaraan->getall()->result();
		$data['iklan']=$this->M_iklan->getbyid($id)->row();
		$this->load->view('admin/iklan/formeditiklan',$data);
	}
	public function aksieditiklan(){
		$idIklan=$this->input->post('idIklan');
		$idDriver=$this->input->post('idDriver');
		$idPengiklan=$this->input->post('idPengiklan');

		$config['upload_path']		='./gambar/iklan';
		$config['allowed_types']	='gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('fotoKendaraan'))
		{$data = array(
						'idDriver'=>$idDriver,
						'idPengiklan'=>$idPengiklan
						
						);
		$this->M_iklan->updateiklan($data,$idIklan);
		$this->session->set_flashdata('edit','Data Berhasil diEdit');
			redirect('iklan');
		}elseif ( $this->upload->do_upload('fotoKendaraan')) {
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data = array(
						'idDriver'=>$idDriver,
						'idPengiklan'=>$idPengiklan,
						'fotoKendaraan'=>$this->upload->data("file_name")
						
						);
		$this->M_iklan->updateiklan($data,$idIklan);
		$this->session->set_flashdata('edit','Data Berhasil diEdit');
			redirect('iklan');
		}
		else
		{
			$idIklan=$this->input->post('idIklan');
				$this->session->set_flashdata('error','Data gagal di update');
				redirect('admin/Admin/editiklan/'.$idIklan);
			
		}


	}

	public function deleteiklan($id)
	{
	// if (!isset($id))
	//  show_404();
	$this->M_iklan->deleteiklan($id);
	if ($this->db->affected_rows()) {
	  $this->session->set_flashdata('hapus','Data Berhasil dihapus');
	redirect('Iklan');
	}else{
		 $this->session->set_flashdata('gagal','Data Gagal dihapus');
	}
	}
 } ?>