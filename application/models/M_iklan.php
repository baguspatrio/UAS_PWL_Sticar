<?php 

/**
 * 
 */
class M_iklan extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function getall(){
		$this->db->join('driver','iklan.idDriver=driver.idDriver');
		$this->db->join('kendaraan','driver.idDriver=kendaraan.idDriver');
		$this->db->join('pengiklan','iklan.idPengiklan=pengiklan.idPengiklan');
		$this->db->join('type','kendaraan.idType=type.idType');
		
 		return $this->db->get('iklan');
 	}
 	public function getdisplay(){
 		$this->db->join('driver','on iklan.idDriver=driver.idDriver');
		$this->db->join('pengiklan','on iklan.idPengiklan=pengiklan.idPengiklan');
		$this->db->join('kendaraan','driver.idDriver=kendaraan.idDriver');
		$this->db->order_by('iklan.idIklan','desc');
    	$this->db->limit('3');
 		return $this->db->get('iklan');
 	}
 	public function portofolio($number,$offset){
 		$this->db->join('driver','on iklan.idDriver=driver.idDriver');
		$this->db->join('pengiklan','on iklan.idPengiklan=pengiklan.idPengiklan');
		$this->db->join('kendaraan','driver.idDriver=kendaraan.idDriver');
		$this->db->order_by('iklan.idIklan','desc');
    	
 		return $this->db->get('iklan',$number,$offset);
 	}

 	public function insertiklan($data){
		$this->db->insert('iklan',$data);
	}
	public function getbyid($id){
			$this->db->join('driver','iklan.idDriver=driver.idDriver');
		$this->db->join('kendaraan','driver.idDriver=kendaraan.idDriver');
		$this->db->join('pengiklan','iklan.idPengiklan=pengiklan.idPengiklan');
		$this->db->join('type','kendaraan.idType=type.idType');
		return $this->db->get_where('iklan',  array('idIklan' => $id));
	}
	public function updateiklan($data,$id){

		$this->db->where('idIklan',$id);
		$this->db->update('iklan',$data);

	}

	public function deleteiklan($id){
		$this->db->where('idIklan',$id);
		$this->db->delete('iklan');
	}

	public function hitungiklan(){
		return $this->db->get('iklan')->num_rows();
	}
	public function hitungdriver(){
		return $this->db->get('driver')->num_rows();
	}
	public function hitungpengiklan(){
		return $this->db->get_where('pengiklan',array('status' =>'2' ))->num_rows();
	}
	public function hitungkendaraan(){
		return $this->db->get('kendaraan')->num_rows();
	}
	public function dataiklan($number,$offset){
		return $this->db->get('iklan',$number,$offset);
	}
	
}

 ?>