<?php 
/**
  * 
  */
 class Display extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model(array('M_iklan','M_pengiklan','M_driver','M_kendaraan' ));
 	}

 	public function index(){
 		$data['totaliklan']=$this->M_iklan->hitungiklan();
 		$data['totalpengiklan']=$this->M_iklan->hitungiklan();
 		$data['totaldriver']=$this->M_iklan->hitungdriver();
 		$data['totalkendaraan']=$this->M_iklan->hitungkendaraan();
 		$data['iklan']=$this->M_iklan->getdisplay()->result();
 		$this->load->view('index.php',$data);
 	}

 	public function portofolio(){
 		$this->load->library('pagination');
 		$config['first_link'] = 'First';
 		$config['base_url'] = base_url().'Display/portofolio';
 		$config['total_rows']=$this->M_iklan->hitungiklan();
 		$config['per_page']=6;
 		$config['next_link'] = 'Selanjutnya';
		 $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 		$from=$this->uri->segment(3);
 		$this->pagination->initialize($config);
		$data['iklan']=$this->M_iklan->portofolio($config['per_page'],$from)->result();
 		$this->load->view('portofolio.php',$data);
 	}


    // Pengiklan
    public function tampildatapengiklan(){

        $data['pengiklan']=$this->M_pengiklan->getall()->result();
        $this->load->view('admin/pengiklan/tampildatapengiklan',$data);
    }
    public function terverivikasi(){
        $data['pengiklan']=$this->M_pengiklan->verivikasi()->result();
        $this->load->view('admin/pengiklan/pengiklanterverivikasi',$data);
    }
    public function tambahpengiklan(){
        $data['error']="";
        $data['merk']=$this->M_kendaraan->getmerk()->result();
        $data['posisi']=$this->M_pengiklan->getposisi()->result();
        $this->load->view('registerpengiklan',$data);
    }

    public function aksitambahpengiklan(){

        $namaPengiklan=$this->input->post('namaPengiklan');
        $namaProduk=$this->input->post('namaProduk');
        $email=$this->input->post('email');
        $alamat=$this->input->post('alamat');
        $noTelpon=$this->input->post('noTelpon');
        $biaya=$this->input->post('biaya');
        $posisiIklan=$this->input->post('posisiIklan');
        $status=1;
        $username=$this->input->post('username');
        $password=$this->input->post('password');

        $config['upload_path']      ='./gambar/pengiklan';
        $config['allowed_types']    ='gif|jpg|png|jpeg';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('fotoProduk'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('register', $error);
        }
        else
        {
            $data['nama_berkas'] = $this->upload->data("file_name");
            $data = array(
                        'namaPengiklan'=>$namaPengiklan,
                        'namaProduk'=>$namaProduk,
                        'emailPengiklan'=>$email,
                        'alamat'=>$alamat,
                        'noTelponpengiklan'=>$noTelpon,
                        'fotoProduk'=>$this->upload->data("file_name"),
                        'biaya'=>$biaya,
                        'posisiIklan'=>$posisiIklan,
                        'status'=>$status,
                        'username'=>$username,
                        'password'=>$password
                        );
           
        $this->M_pengiklan->insertpengiklan($data);
        
        $this->session->set_flashdata('pembayaran','<div class="alert alert-success alert-dismissible fade show" role="alert"">Silahkan Lakukan pembayaran  ke rekening Bank Mandiri berikut:455644678 an:sticar <br> <b>konfirmasi melalui kontak kami setelah melakukan pembayaran</b>
                         </div>');
            redirect('tambahpengiklan');
        }
    }
    public function verivikasi($id){

        $data = array('status' =>2 );
        $this->M_pengiklan->updatepengiklan($data,$id);
        $this->session->set_flashdata('edit','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil di verivikasi
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('tampildatapengiklan');

    }
    // public function editpengiklan($id){

    //     $data['pengiklan']=$this->M_pengiklan->getbyid($id)->row();
    //     $this->load->view('admin/pengiklan/formeditpengiklan',$data);
    // }
    // public function aksieditpengiklan(){
    //     $idPengiklan=$this->input->post('idPengiklan');
    //     $namaPengiklan=$this->input->post('namaPengiklan');
    //     $namaProduk=$this->input->post('namaProduk');
    //     $email=$this->input->post('email');
    //     $alamat=$this->input->post('alamat');
    //     $noTelpon=$this->input->post('noTelpon');
    //     $posisiIklan=$this->input->post('posisiIklan');
        

    //     $config['upload_path']      ='./gambar/pengiklan';
    //     $config['allowed_types']    ='gif|jpg|png';
    //     // $config['max_size']             = 100;
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;
    //     $config['encrypt_name']         = TRUE;
    //     $this->load->library('upload', $config);
    //     if ( ! $this->upload->do_upload('fotoProduk'))
    //     {
    //         $data['nama_berkas'] = $this->upload->data("file_name");
    //         $data = array(
    //                     'namaPengiklan'=>$namaPengiklan,
    //                     'namaProduk'=>$namaProduk,
    //                     'emailPengiklan'=>$email,
    //                     'alamat'=>$alamat,
    //                     'noTelponpengiklan'=>$noTelpon,
    //                     'posisiIklan'=>$posisiIklan
    //                     );
    //     $this->M_pengiklan->updatepengiklan($data,$idPengiklan);
    //     $this->session->set_flashdata('edit','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil diUbah
    //                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    //         redirect('tampildatapengiklan');
    //     }
    //     elseif ($this->upload->do_upload('fotoProduk')) {
    //         $data['nama_berkas'] = $this->upload->data("file_name");
    //         $data = array(
    //                     'namaPengiklan'=>$namaPengiklan,
    //                     'namaProduk'=>$namaProduk,
    //                     'emailPengiklan'=>$email,
    //                     'alamat'=>$alamat,
    //                     'noTelponpengiklan'=>$noTelpon,
    //                     'fotoProduk'=>$this->upload->data("file_name"),
    //                     'posisiIklan'=>$posisiIklan
    //                     );
    //     $this->M_pengiklan->updatepengiklan($data,$idPengiklan);
    //     $this->session->set_flashdata('edit','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil diUbah
    //                      </div>');
    //         redirect('tampildatapengiklan');
    //     }
    //     else
    //     {$idDriver=$this->input->post('idPengiklan');
    //             $this->session->set_flashdata('error','Data gagal di update');
    //             redirect('admin/admin/editpengiklan/'.$idDriver);
    //     }


    // }


    public function deletepengiklan($id)
    {

   if (empty($this->session->userdata('status'))) {

            redirect('Login');
        }
        $cek=$this->M_pengiklan->cekpengiklan($id)->num_rows();
        $cekiklan=$this->M_pengiklan->cekiklan($id)->num_rows();
        if ($cek>0 || $cekiklan>0) {
             $this->session->set_flashdata('cek','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data sedang digunakan pada tabel lain
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            
             redirect('tampildatapengiklan');
        }
        else if ($cek==0){
          $this->session->set_flashdata('hapus','<div class="alert alert-success alert-dismissible fade show" role="alert"">Data Berhasil dihapus
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
          $this->M_pengiklan->deletepengiklan($id);
        redirect('tampildatapengiklan');
        }else{
             $this->session->set_flashdata('gagal','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Gagal dihapus
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
              redirect('tampildatapengiklan');
        }
    }

    public function dashboardpengiklan(){
        if (empty($this->session->userdata('status'))) {

            redirect('pengiklan');
        }

        $data['iklan']=$this->M_pengiklan->tampildata()->result();
        $this->load->view('dashboardpengiklan',$data);
    }
    public function getbiaya(){
        $idposisi=$this->input->post('id',TRUE);
        $data=$this->M_pengiklan->getbiaya($idposisi)->result();
          echo json_encode($data);
    }














 } ?>