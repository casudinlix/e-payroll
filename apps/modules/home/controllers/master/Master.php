<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    $cek=$this->acl->cek($this->session->userdata('user_id'));
    if ($cek->num_rows()==0) {
      $this->session->set_flashdata('denied', 'value');
      redirect($_SERVER['HTTP_REFERER']);

    }
    if(empty($this->session->userdata('company_id'))) {
      redirect('welcome/dude','refresh');
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title']="| Company";
    $data['company']=$this->app->company()->result();
    $data['report']=$this->app->reportcompany()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('master/company/index', $data);
    $this->load->view('layout/foot', $data);
    if (isset($_POST['simpan'])) {
      $this->db->trans_begin();
    			$value = [
    				'company_name'			=> $this->input->post('company',TRUE),
            'phone'			=> $this->input->post('phone',TRUE),
            'fax'			=> $this->input->post('fax',TRUE),
            'email'			=> $this->input->post('email',TRUE),];

    $company = $value;


    $this->global->create('tbl_company', $company, TRUE);
    if ($this->db->trans_status() === FALSE) {
    	$this->db->trans_rollback();

    	$this->session->set_flashdata('error', 'value');

    		} else {
    $this->db->trans_commit();

    		}


    $this->session->set_flashdata('success','value');

    redirect('masters/company');
    }

  }
  function companyedit(){
    $data['title']="| Edit Company";
    $data['company']=$this->app->getidcompany($this->uri->segment(4))->row();
    $data['report']=$this->app->reportcompany()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('master/company/edit', $data);
    $this->load->view('layout/foot', $data);
    if (isset($_POST['simpan'])) {
      $this->db->trans_begin();
    			$value = [
    				'company_name'			=> $this->input->post('company',TRUE),
            'phone'			=> $this->input->post('phone',TRUE),
            'fax'			=> $this->input->post('fax',TRUE),
            'email'			=> $this->input->post('email',TRUE),];

    $company = $value;

    $id=$this->input->post('id');
    $this->global->update('tbl_company', $company, ['id' => $id]);
    if ($this->db->trans_status() === FALSE) {
    	$this->db->trans_rollback();

    	$this->session->set_flashdata('error', 'value');

    		} else {
    $this->db->trans_commit();

    		}


    $this->session->set_flashdata('success','value');

    redirect('masters/company');
    }
  }
  function employee(){
    $data['title']="| Employee";

    $data['employee']=$this->app->getemployee($this->session->userdata('company_id'))->result();

    $this->load->view('layout/head', $data);
    $this->load->view('master/employee/index', $data);
    $this->load->view('layout/foot', $data);
  }
  function employeeadd(){
    $data['title']="| Add New Employee";
    $data['nip']=$this->fungsi->nip();
    $data['company']=$this->app->company()->result();
    $data['dept']=$this->app->dept()->result();
    $data['position']=$this->app->position()->result();
    $data['bank']=$this->app->bank()->result();
    $data['group']=$this->app->group()->result();
    $data['emptype']=$this->app->emptype()->result();
    $data['agama']=$this->app->agama()->result();
    $data['edu']=$this->app->edu()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('master/employee/add', $data);
    $this->load->view('layout/foot', $data);
  }
function simpanemploye(){
  if (empty($_POST)) {
    $this->session->set_flashdata('denied', 'value');
    redirect($_SERVER['HTTP_REFERER']);
  }else{
    $this->db->trans_begin();

        $value = [
          'fid'			=> $this->input->post('fid',TRUE),
          'emp_nip'			=> $this->fungsi->nip(),
          'new_nip'			=> $this->fungsi->nip(),
          'nik'			=>  $this->input->post('nik',TRUE),
          'emp_name'			=> $this->input->post('nama',TRUE),
          'birth_date'			=> tanggal($this->input->post('ttl',TRUE)),
          'sex'			=> $this->input->post('sex',TRUE),
          'merital_status'			=> $this->input->post('nikah',TRUE),
          'phone'			=> $this->input->post('phone',TRUE),
          'email'			=> $this->input->post('email',TRUE),
          'address'			=> $this->input->post('address',TRUE),
          'agama_id'			=> $this->input->post('agama',TRUE),
          'dept_id'			=> $this->input->post('dept',TRUE),
          'position_id'			=> $this->input->post('pos',TRUE),
          'join_date'			=> tanggal($this->input->post('join',TRUE)),
          'emp_type_id'			=> $this->input->post('emptype',TRUE),
          'status'			=> 'active',
          'contract_end'			=> tanggal($this->input->post('end',TRUE)),
          'bank_account'			=> $this->input->post('account',TRUE),
          'bank_type'			=> $this->input->post('bank',TRUE),
          'npwp'			=> $this->input->post('npwp',TRUE),
          'bpjskes'			=> $this->input->post('bpjskes',TRUE),
          'bpjstk'			=> $this->input->post('end',TRUE),
          'edu_id'			=> $this->input->post('edu',TRUE),
          'company_id'			=> $this->input->post('company',TRUE),

        ];

    $employee = $value;
    $this->global->create('tbl_employee', $employee, TRUE);


    if ($this->db->trans_status() === FALSE) {
    $this->db->trans_rollback();

    $this->session->set_flashdata('error', 'value');
redirect('masters/employee','refresh');
      } else {
    $this->db->trans_commit();

      }

      $login=['id_emp'=>$this->app->maxid('id','tbl_employee')->id,
              'username'=>$this->input->post('nama',TRUE),
              'pass'=>base64_encode($this->fungsi->nip()),
              'group_id'=>$this->input->post('group',TRUE),
              'status'=>1,
              'add_by'=>$this->session->userdata('username')
    ];

  $this->global->create('tbl_users', $login, TRUE);


  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
redirect('masters/employee','refresh');
    } else {
  $this->db->trans_commit();

    }


    $company=['user_id'=>$this->app->maxid('id','tbl_users')->id,
            'company_id'=>$this->input->post('company',TRUE),
            'add_by'=>$this->session->userdata('username')
    ];

$this->global->create('tbl_company_permission', $company, TRUE);

if ($this->db->trans_status() === FALSE) {
$this->db->trans_rollback();

$this->session->set_flashdata('error', 'value');
redirect('masters/employee','refresh');
  } else {
$this->db->trans_commit();

  }

    $this->session->set_flashdata('success','value');

    redirect('masters/employee','refresh');
  }
}
}
