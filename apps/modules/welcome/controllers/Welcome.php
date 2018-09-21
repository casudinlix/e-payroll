<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login')==TRUE) {
			redirect('welcome/dude','refresh');
		}
		//Codeigniter : Write Less Do More
	}
	public function index()
	{
		$this->load->view('welcome_message');

		if (isset($_POST['login'])) {
			$cek=$this->app->getlogin($this->input->post('fid',TRUE),$this->input->post('pass'));
			if ($cek->num_rows()>0) {
				foreach ($cek->result() as $key) {
$sess=['login'=>TRUE,
				'user_id'=>$key->user_id,
				'emp_id'=>$key->emp_id,
				'username'=>$key->username,
				'group_id'=>$key->group_id];
				}
				$this->session->set_userdata($sess);
				redirect('welcome/dude','refresh');
			}else{
				$this->session->set_flashdata('error', 'value');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}
	function logout(){
		$sess=['login',
						'user_id',
						'emp_id',
						'username' ,
						'group_id'];

		$this->session->unset_tempdata($sess);

						redirect('welcome/index','refresh');

	}
}
