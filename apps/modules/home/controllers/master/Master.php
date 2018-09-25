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
          'bpjstk'			=> $this->input->post('bpjstk',TRUE),
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
  $salary=['emp_id'=>$this->app->maxid('id','tbl_employee')->id,
            'salary'=>$this->input->post('salary'),
          'add_by'=>$this->session->userdata('username')
          ];

$this->global->create('tbl_salary', $salary, TRUE);


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
function employeeedit(){
  $data['title']="| Edit Employee";
  $data['nip']=$this->fungsi->nip();
  $data['company']=$this->app->company()->result();
  $data['dept']=$this->app->dept()->result();
  $data['position']=$this->app->position()->result();
  $data['bank']=$this->app->bank()->result();
  $data['group']=$this->app->group()->result();
  $data['emptype']=$this->app->emptype()->result();
  $data['agama']=$this->app->agama()->result();
  $data['edu']=$this->app->edu()->result();
  $data['employee']=$this->app->editemployee($this->uri->segment(4));
  $this->load->view('layout/head', $data);
  $this->load->view('master/employee/edit', $data);
  $this->load->view('layout/foot', $data);
}
function employeedetil(){

}
function editemp(){
  $this->db->trans_begin();
  $id=$this->input->post('id');

      $value = [
        'fid'			=> $this->input->post('fid',TRUE),

        'new_nip'			=> $this->input->post('nip'),
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
        'bpjstk'			=> $this->input->post('bpjstk',TRUE),
        'edu_id'			=> $this->input->post('edu',TRUE),
        'company_id'			=> $this->input->post('company',TRUE),

      ];

  $employee = $value;
    $this->global->update('tbl_employee', $employee, ['id' => $id]);


  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/employee','refresh');
    } else {
  $this->db->trans_commit();

    }

    $login=['id_emp'=>$id,
            'username'=>$this->input->post('nama',TRUE),
            'pass'=>base64_encode($this->input->post('pass')),
            'group_id'=>$this->input->post('group',TRUE),
            'status'=>1,
            'add_by'=>$this->session->userdata('username')
  ];
  $salary=['emp_id'=>$this->app->maxid('id','tbl_employee')->id,
            'salary'=>$this->input->post('salary'),
          'add_by'=>$this->session->userdata('username')
          ];

  $this->global->update('tbl_salary', $salary, ['emp_id' => $id]);

$this->global->update('tbl_users', $login, ['id_emp' => $id]);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/employee','refresh');
  } else {
  $this->db->trans_commit();

  }


  $company=['user_id'=>$id,
          'company_id'=>$this->input->post('company',TRUE),
          'add_by'=>$this->session->userdata('username')
  ];


  $this->global->update('tbl_company_permission', $company, ['user_id' => $id]);

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
function management(){
  $data['title']="| Management";
  $data['dept']=$this->app->dept()->result();
  $data['agama']=$this->app->agama()->result();
  $data['type']=$this->app->emptype()->result();
  $data['edu']=$this->app->edu()->result();
  $data['position']=$this->app->position()->result();
  $data['insentif']=$this->app->insentif()->result();

  $this->load->view('layout/head', $data);
  $this->load->view('master/management/index', $data);
  $this->load->view('layout/foot', $data);

if (isset($_POST['simpanagama'])) {
  $this->db->trans_begin();
  $company=[
          'nama_agama'=>$this->input->post('agama',TRUE),
          'add_by'=>$this->session->userdata('username')
  ];


  $this->global->create('tbl_agama', $company,TRUE);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
}
if (isset($_POST['tambahdept'])) {
  $this->db->trans_begin();
  $company=[
          'dept_name'=>$this->input->post('dept',TRUE),
          'add_by'=>$this->session->userdata('username')
  ];


  $this->global->create('tbl_dept', $company,TRUE);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
}


if (isset($_POST['tambahtype'])) {
  $this->db->trans_begin();
  $company=[
          'type_name'=>$this->input->post('type',TRUE),
          'add_by'=>$this->session->userdata('username')
  ];


  $this->global->create('tbl_emp_type', $company,TRUE);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
}
//init
if (isset($_POST['insentif'])) {
  $this->db->trans_begin();
  $company=[
          'code'=>$this->input->post('code',TRUE),
          'insentif_name'=>$this->input->post('name',TRUE),
          'amount'=>$this->input->post('amount',TRUE),
          'add_by'=>$this->session->userdata('username')
  ];


  $this->global->create('tbl_insentif', $company,TRUE);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
}



if (isset($_POST['edu'])) {
  $this->db->trans_begin();
  $company=[
          'edu_code'=>$this->input->post('code',TRUE),
          'edu_name'=>$this->input->post('name',TRUE),
          'add_by'=>$this->session->userdata('username')
  ];


  $this->global->create('tbl_edu', $company,TRUE);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
}
if (isset($_POST['tambahdept'])) {
  $this->db->trans_begin();
  $company=[
          'dept_name'=>$this->input->post('dept',TRUE),
          'add_by'=>$this->session->userdata('username')
  ];


  $this->global->create('tbl_dept', $company,TRUE);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
}
if (isset($_POST['simpanposisi'])) {
  $this->db->trans_begin();
  $company=[
          'position_name'=>$this->input->post('posisi',TRUE),
          'add_by'=>$this->session->userdata('username')
  ];


$this->global->create('tbl_position', $company,TRUE);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
}

}
function editagama(){
  $data['title']="| Edit Religion";

  $data['agamaid']=$this->app->agamaid(base64_decode($this->uri->segment(4)));


  $this->load->view('layout/head', $data);
  $this->load->view('master/management/editagama', $data);
  $this->load->view('layout/foot', $data);
  if (isset($_POST['editagama'])) {
$id=$this->input->post('id');
$this->db->trans_begin();
$company=[
        'nama_agama'=>$this->input->post('agama',TRUE),
        'update_by'=>$this->session->userdata('username')
];


$this->global->update('tbl_agama', $company, ['id' => $id]);

if ($this->db->trans_status() === FALSE) {
$this->db->trans_rollback();

$this->session->set_flashdata('error', 'value');
redirect('masters/management','refresh');
} else {
$this->db->trans_commit();

}

$this->session->set_flashdata('success','value');

redirect('masters/management','refresh');
  }

}
function editdept(){
  $data['title']="| Edit Religion";

  $data['deptid']=$this->app->deptid(base64_decode($this->uri->segment(4)));


  $this->load->view('layout/head', $data);
  $this->load->view('master/management/editdept', $data);
  $this->load->view('layout/foot', $data);

  if (isset($_POST['editdept'])) {
  $id=$this->input->post('id');
  $this->db->trans_begin();
  $company=[
        'dept_name'=>$this->input->post('dept',TRUE),
        'update_by'=>$this->session->userdata('username')
  ];


  $this->global->update('tbl_dept', $company, ['id' => $id]);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
  }

}
function editposition(){
  $data['title']="| Edit Position";

  $data['posisi']=$this->app->positionid($this->uri->segment(4));
  $this->load->view('layout/head', $data);
  $this->load->view('master/management/editposisi', $data);
  $this->load->view('layout/foot', $data);
  if (isset($_POST['editagama'])) {
  $id=$this->input->post('id');
  $this->db->trans_begin();
  $company=[
        'position_name'=>$this->input->post('posisi',TRUE),
        'update_by'=>$this->session->userdata('username')
  ];


  $this->global->update('tbl_position', $company, ['id' => $id]);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
  }
}
function edittype(){
  $data['title']="| Edit Type";

  $data['type']=$this->app->emptypeid($this->uri->segment(4));
  $this->load->view('layout/head', $data);
  $this->load->view('master/management/edittype', $data);
  $this->load->view('layout/foot', $data);
  if (isset($_POST['edittype'])) {
  $id=$this->input->post('id');
  $this->db->trans_begin();
  $company=[
        'type_name'=>$this->input->post('type',TRUE),
        'update_by'=>$this->session->userdata('username')
  ];


  $this->global->update('tbl_emp_type', $company, ['id' => $id]);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
  }
}
function editinsentif(){
  $data['title']="| Edit Insentif";

  $data['insentif']=$this->app->insentifid($this->uri->segment(4));
  $this->load->view('layout/head', $data);
  $this->load->view('master/management/editinsentif', $data);
  $this->load->view('layout/foot', $data);
  if (isset($_POST['insentif'])) {
  $id=$this->input->post('id');
  $this->db->trans_begin();
  $company=[
        'code'=>$this->input->post('code',TRUE),
        'insentif_name'=>$this->input->post('name',TRUE),
        'amount'=>$this->input->post('amount',TRUE),
        'update_by'=>$this->session->userdata('username')
  ];


  $this->global->update('tbl_insentif', $company, ['id' => $id]);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
  }
}
function editedu(){
  $data['title']="| Edit Type";

  $data['edu']=$this->app->eduid($this->uri->segment(4));
  $this->load->view('layout/head', $data);
  $this->load->view('master/management/editedu', $data);
  $this->load->view('layout/foot', $data);
  if (isset($_POST['edu'])) {
  $id=$this->input->post('id');
  $this->db->trans_begin();
  $company=[
        'edu_code'=>$this->input->post('code',TRUE),
        'edu_name'=>$this->input->post('name',TRUE),
        'update_by'=>$this->session->userdata('username')
  ];


  $this->global->update('tbl_edu', $company, ['id' => $id]);

  if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();

  $this->session->set_flashdata('error', 'value');
  redirect('masters/management','refresh');
  } else {
  $this->db->trans_commit();

  }

  $this->session->set_flashdata('success','value');

  redirect('masters/management','refresh');
  }

}
}
