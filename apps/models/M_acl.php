<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_acl extends CI_Model {


function cek($id){
return $cek=$this->db->get_where('view_role',['module'=>$this->router->fetch_class(),'method'=>$this->router->fetch_method(),'user_id'=>$id]);


}

}

/* End of file M_acl.php */
/* Location: .//var/www/html/mypro/app/models/M_acl.php */
