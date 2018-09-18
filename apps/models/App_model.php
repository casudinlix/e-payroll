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
}
