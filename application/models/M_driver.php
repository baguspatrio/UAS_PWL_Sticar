<?php 
/**
  * 
  */
 class M_driver extends CI_Model
 {
 	
 	function __construct()
 	{
 		# code...
 	}

 	public function getall(){
 		
 		return $this->db->get('driver');
 	}

 	public function insertdriver($data){
		$this->db->insert('driver',$data);
	}
	public function getbyid($id){

		return $this->db->get_where('driver',  array('idDriver' => $id));
	}
	public function updatedriver($data,$id){

		$this->db->where('idDriver',$id);
		$this->db->update('driver',$data);

	}

	public function deletedriver($id){
		$this->db->where('idDriver',$id);
		$this->db->delete('driver');
	}
	public function cekdriver($id){
		$this->db->join('driver','on driver.idDriver=kendaraan.idDriver');
		return $this->db->get_where('kendaraan', array('kendaraan.idDriver' => $id ));
	}
	public function cekiklan($id){
		$this->db->join('driver','on driver.idDriver=iklan.idDriver');
		return $this->db->get_where('iklan', array('iklan.idDriver' => $id ));
	}

 }


 ?>