<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if(empty($this->session->userdata('company_id'))) {
      redirect('welcome/dude','refresh');
    }
  }

  function index()
  {
    $data['title']='| Home';

    $this->load->view('layout/head',$data);
$this->load->view('index', $data);
  $this->load->view('layout/foot');
  }
  function logout(){
    $sess=['login',
            'user_id',
            'emp_id',
            'username',
            'group_id',
          'company_id'];

    $this->session->unset_tempdata($sess);
    $this->session->sess_destroy();

            redirect('welcome/index','refresh');
  }

}
