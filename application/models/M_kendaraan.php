<?php 

/**
 * 
 */
class M_kendaraan extends CI_Model
{
	
	function __construct()
	{
		# code...
	}
	public function getall(){

		$this->db->join('merk','kendaraan.idMerk=merk.idMerk');
		$this->db->join('type','kendaraan.idType=type.idType');
		$this->db->join('driver','kendaraan.idDriver=driver.idDriver');
 		return $this->db->get('kendaraan');
 	}

 	public function insertkendaraan($data){
		$this->db->insert('kendaraan',$data);
	}
	public function getbyid($id){
		$this->db->join('merk','kendaraan.idMerk=merk.idMerk');
		$this->db->join('type','kendaraan.idType=type.idType');
		$this->db->join('driver','kendaraan.idDriver=driver.idDriver');
		return $this->db->get_where('kendaraan',  array('idKendaraan' => $id));
	}
	public function updatekendaraan($data,$id){

		$this->db->where('idKendaraan',$id);
		$this->db->update('kendaraan',$data);

	}

	public function deletekendaraan($id){
		$this->db->where('idKendaraan',$id);
		$this->db->delete('kendaraan');
	}
	public function getmerk(){
		return $this->db->get('merk');
	}


	public function gettype($idMerk){
		$this->db->join('merk','type.idMerk=merk.idMerk');
		return $this->db->get_where('type',array('type.idMerk' => $idMerk ));
	}

}
 ?>