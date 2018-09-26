<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $cek=$this->acl->cek($this->session->userdata('user_id'));
    if ($cek->num_rows()==0) {
      $this->session->set_flashdata('denied', 'value');
      redirect($_SERVER['HTTP_REFERER']);

    }
    if(empty($this->session->userdata('company_id'))) {
      redirect('welcome/dude','refresh');
    }
  }

  function index()
  {

  }
  function detail(){
    $data['title']="| Employee Detail";
    $data['company']=$this->app->company()->result();
    $data['emp']=$this->app->editemployee($this->uri->segment(4));
    $this->load->view('layout/head', $data);
    $this->load->view('employee/emp_ditel', $data);
    $this->load->view('layout/foot', $data);
  }

}
