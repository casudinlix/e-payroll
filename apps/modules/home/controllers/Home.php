<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (empty($this->session->userdata('login'))) {
      $this->session->set_flashdata('error', 'value');
      redirect('welcome','refresh');
    }
  }

  function index()
  {
    $data['title']='| Home';
    
    $this->load->view('layout/head',$data);
$this->load->view('index', $data);
  $this->load->view('layout/foot');
  }

}
 ?>
