
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilih extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    if (empty($this->session->userdata('user_id'))) {
      $this->session->set_flashdata('error', 'value');
      redirect('welcome/index','refresh');
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['company']=$this->app->getcompany_id()->result();

    $this->load->view('pilih',$data);
    if (isset($_POST['pilih'])) {
      $array = array(
        'company_id' => $this->input->post('company')
      );
      $this->session->set_userdata($array);
      redirect('home','refresh');
    }

  }
function change(){
  $this->session->unset_userdata('company_id');
  redirect('welcome/dude','refresh');
}
} ?>
