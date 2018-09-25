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
function getcompany_id(){
  return $this->db->get_where('view_company',['user_id'=>$this->session->userdata('user_id')]);
}
function reportcompany(){
  return $this->db->get('view_report_company');
}
function getidcompany($id){
  return $this->db->get_where('tbl_company',['id'=>base64_decode($id)]);
}
function getemployee($id){

  $this->db->order_by('emp_name', 'asc');
  return $this->db->get_where('view_employee',['company_id'=>$id]);
}
function emptype(){
  return $this->db->get('tbl_emp_type');
}
function emptypeid($id){
  return $this->db->get_where('tbl_emp_type',['id'=>base64_decode($id)])->row();
}
function dept(){
return $this->db->get('tbl_dept');
}
function deptid($id){
  return $this->db->get_where('tbl_dept',['id'=>$id])->row();
}
function position(){
return $this->db->get('tbl_position');
}
function positionid($id){
  return $this->db->get_where('tbl_position',['id'=>base64_decode($id)])->row();
}
function bank(){
  return $this->db->get('tbl_bank');
}
function agama(){
  return $this->db->get('tbl_agama');
}
function agamaid($id){
  return $this->db->get_where('tbl_agama',['id'=>$id])->row();
}
function edu(){
  return $this->db->get('tbl_edu');
}
function eduid($id){
  return $this->db->get_where('tbl_edu',['id'=>base64_decode($id)])->row();
}
function maxid($id,$table){
  $this->db->select_max($id);
  $cek=$this->db->get($table)->row();
  return $cek;
}
function editemployee($id){
return $this->db->get_where('view_employee',['emp_id'=>base64_decode($id)])->row();
}
function cekpass($id){
  return $this->db->get_where('tbl_users',['id_emp'=>base64_decode($id)]);
}
function menuactive(){
  return $this->db->get_where('tbl_menus',['is_published'=>1]);
}
function insentif(){
  return $this->db->get('tbl_insentif');
}
function insentifid($id){
  return $this->db->get_where('tbl_insentif',['id'=>base64_decode($id)])->row();
}

}
