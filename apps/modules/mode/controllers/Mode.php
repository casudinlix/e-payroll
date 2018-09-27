<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mode extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (empty($_POST)) {
      	$this->session->set_flashdata('denied', 'value');
         redirect($_SERVER['HTTP_REFERER']);
    }
  }

  function index()
  {

  }

}
