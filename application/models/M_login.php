<?php 

/**
 * 
 */
class M_login extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function ceklogin($username,$password){
		return $this->db->get_where('admin',array('username' =>$username ,'password'=>$password ));
	}

	public function getall(){
 		return $this->db->get('admin');
 	}

 	public function insertkaryawan($data){
		$this->db->insert('admin',$data);
	}
	public function getbyid($id){
		
		return $this->db->get_where('admin',  array('id' => $id));
	}
	public function updatekaryawan($data,$id){

		$this->db->where('id',$id);
		$this->db->update('admin',$data);

	}

	public function deletekaryawan($id){
		$this->db->where('id',$id);
		$this->db->delete('admin');
	}
}


 ?>