<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More



  }

  function index()
  {
    // $this->db->select_max('id');
    // $cek=$this->db->get('tbl_employee');
    // echo $cek->row()->id;
    echo $this->app->maxid('id','tbl_employee')->id;

  }
  function nonactive(){
  echo  $this->input->post('id');
  }
  function hapusrole(){
    $cek=$this->acl->cek($this->session->userdata('user_id'));
    if ($cek->num_rows()==0) {
      $this->session->set_flashdata('denied', 'value');
    }
    $id=$this->db->where('id', $this->input->post('id'));
     $this->db->delete('tbl_role_permission');

  }

}
