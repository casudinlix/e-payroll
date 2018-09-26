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
  function cekpass(){

  }
function api_employee(){
  $list = $this->employee->get_datatables();
       $data = array();
       $no = $_POST['start'];
       foreach ($list as $key) {
           $no++;
           $row = array();
           $row[] = $no;
           $row[] = "<a title='Detail' href='".site_url('masters/employee/detil/'.clean($key->emp_id))."'>".$key->emp_name."</a>";

           $row[] = $key->new_nip;
           $row[] = $key->company_name;
           $row[] = $key->dept_name;
           $row[] = $key->join_date;
           $row[] = $key->position_name;
           $row[] = $key->type_name;
           $row[] = "<a href='".site_url('masters/employee/edit/'.clean($key->emp_id))."' class='btn btn-warning' title='Edit'><i class='icon icon-note'></i></a>";

           $data[] = $row;
       }

       $output = array(
                       "draw" => $_POST['draw'],
                       "recordsTotal" => $this->employee->count_all(),
                       "recordsFiltered" => $this->employee->count_filtered(),
                       "data" => $data,
               );
       //output to json format
       echo json_encode($output);
}
}
