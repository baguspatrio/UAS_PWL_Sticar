<?php 
/**
 * 
 */
class M_pengiklan extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function ceklogin($username,$password){
		return $this->db->get_where('pengiklan',array('username' =>$username ,'password'=>$password ));
	}
	public function getall(){
		$this->db->join('posisi','pengiklan.posisiIklan=posisi.idPosisi');
		$this->db->join('biaya','pengiklan.biaya=biaya.idBiaya');
 		return $this->db->get_where('pengiklan',array('status' => 1 ));
 	}
 	public function verivikasi(){
 		return $this->db->get_where('pengiklan',array('status' => 2 ));
 	}
 	public function tampildata(){
        $id = $this->session->userdata('idPengiklan');
		$this->db->join('driver','iklan.idDriver=driver.idDriver');
		$this->db->join('kendaraan','driver.idDriver=kendaraan.idDriver');
		$this->db->join('pengiklan','iklan.idPengiklan=pengiklan.idPengiklan');
		$this->db->join('type','kendaraan.idType=type.idType');
		
 		return $this->db->get_where('iklan',array('iklan.idPengiklan'=>$id));
 	}

 	public function insertpengiklan($data){
		$this->db->insert('pengiklan',$data);
	}
	public function getbyid($id){

		return $this->db->get_where('pengiklan',  array('idPengiklan' => $id));
	}
	public function updatepengiklan($data,$id){

		$this->db->where('idPengiklan',$id);
		$this->db->update('pengiklan',$data);

	}

	public function deletepengiklan($id){
		$this->db->where('idPengiklan',$id);
		$this->db->delete('pengiklan');
	}
	public function cekpengiklan($id){
		$this->db->join('pengiklan','pengiklan.idPengiklan=iklan.idPengiklan');
		return $this->db->get_where('iklan', array('iklan.idPengiklan' => $id ));
	}
	public function cekiklan($id){
		$this->db->join('driver','on driver.idDriver=iklan.idDriver');
		return $this->db->get_where('iklan', array('iklan.idDriver' => $id ));
	}
	public function getposisi(){
		return $this->db->get('posisi');
	}
	public function getbiaya($idposisi){
		$this->db->join('posisi','biaya.idPosisi=posisi.idPosisi');
		return $this->db->get_where('biaya',array('biaya.idPosisi' => $idposisi ));
	}

	public function cekharga($id){

		return $this->db->get_where('pengiklan',  array('namaPengiklan' => $id));
	}

}
 ?>