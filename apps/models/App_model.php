<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function getlogin($fid,$pass){
    return $this->db->get_where('view_act_login', ['fid'=>$fid,'pass'=>base64_encode($pass),'status'=>1]);
  }
function getapp(){
  return $this->db->get('tbl_app')->row();
}
function getcompany(){
  return $this->db->get('tbl_company');
}
function getcompanydetil($id){
  return $this->db->get_where('tbl_company',['id'=>$id])->row();

}
function getmenu(){
  return $this->db->get('tbl_menus');

}
function getmenudetil($id){
  return $this->db->get_where('tbl_menus',['id'=>$id]);

}
function logs($table,$type,$data){
	$this->db->insert('tbl_logs', ['table_name'=>$table,'type_log'=>$type,'activity'=>$data]);
	return false;

}
function group(){
  return $this->db->get('tbl_group');
}
function groupdetil($id){
    return $this->db->get_where('tbl_group',['id'=>$id])->row();
}
function role(){
return $this->db->get('tbl_role');
}
function roledetil($id){
  return $this->db->get_where('tbl_role',['id'=>$id])->row();
}
function role_permission(){
return $this->db->get('tbl_role_permission');
}
function role_permissionditel($id){

}
function user(){
  return $this->db->get('view_role');
}
function menuper(){
  return $this->db->get('view_menu');
}
function company(){
  return $this->db->get('tbl_company');
}
function companyid(){
  return $this->db->get('view_company');
}
function userid(){
  return $this->db->get('tbl_users');
}
}
