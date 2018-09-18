<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_acl extends CI_Model {


function cek($module,$method,$id){
$cek=$this->db->get_where('view_role',['module'=>$module,'method'=>$method,'user_id'=>$id]);
if ($cek->num_rows()>0) {
	return $cek->result();
}else{
	$this->session->set_flashdata('denied', 'value');
	return false;
}

}

}

/* End of file M_acl.php */
/* Location: .//var/www/html/mypro/app/models/M_acl.php */
