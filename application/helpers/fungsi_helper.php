<?php 

function cekadmin(){
	$ci =& get_instance();
	$ci->load->library('Fungsi');
	if ($ci->Fungsi->user_login()->level!='admin') {

		redirect ('admin');
		# code...
	}
}

 ?>