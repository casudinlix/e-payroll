<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acl extends MX_Controller{

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
    $data['title']="| Menu";
    $data['menu']=$this->app->getmenu()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('setting/menu/index', $data);
    $this->load->view('layout/foot', $data);

  }
  function editmenu(){
    $data['title']="| Edit Menu";
    $id=base64_decode($this->uri->segment(4));
    $data['menu']=$this->app->getmenudetil($id)->row();
    $data['menulist']=$this->fungsi->getmenu()->result();
    $cek=$this->db->get_where('tbl_menus',['id'=>$id])->result();
  		foreach ($cek as $key) {
  			$idm=$key->id;
  		}
  $data['parent']=$this->db->get_where('tbl_menus',['id'=>$idm])->row();


    $this->load->view('layout/head', $data);
    $this->load->view('setting/menu/edit', $data);
    $this->load->view('layout/foot', $data);
    if (isset($_POST['simpan'])) {
      $this->db->trans_begin();

    			$value = [
    				'menu'			=> $this->input->post('menu',TRUE),
    				'parent'		=> $this->input->post('parent',TRUE),
    				'link'			=> $this->input->post('link',TRUE),
    				'update_by'	=>$this->session->userdata('username'),
    				'is_published'	=>$this->input->post('publish'),
    				'menu_order'	=>1,
    			];

    			$parent = $this->input->post('parent',TRUE);

    			if($parent == 0) {
    				$value['level'] = 0;
    				$value['icon'] 	= $this->input->post('icon',TRUE);
    			} else {
    				$value['level'] = $this->home->get_level_menu($parent);
    				$value['icon']	= NULL;
    			}

    			$data_menu = $value;
    			$id = $this->input->post('id',TRUE);

    			$this->global->update('tbl_menus', $data_menu, ['id' => $id]);


    			if ($this->db->trans_status() === FALSE) {
    	            $this->db->trans_rollback();
    				$this->session->set_flashdata('error','error');
    				redirect('settings/menu');

    	        } else {
    	        	$this->db->trans_commit();

    	        }
    $this->session->set_flashdata('success','value');
    redirect('settings/menu');
    }
  }
  function menuadd(){
    $data['title']="| Add Menu";
    $data['menu']=$this->app->getmenu()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('setting/menu/add', $data);
    $this->load->view('layout/foot', $data);
    if (isset($_POST['simpan'])) {
      $this->db->trans_begin();
    			$value = [
    				'menu'			=> $this->input->post('menu',TRUE),
    				'parent'		=> $this->input->post('parent',TRUE),
    				'link'			=> $this->input->post('link',TRUE),
    				'create_by'		=>$this->session->userdata('username'),
    				'is_published'	=> 1,
    				'menu_order'	=> 1];
    			$parent=$this->input->post('parent',TRUE);
    			if($parent == 0) {
    				$value['level'] = 0;
    				$value['icon'] 	= $this->input->post('icon',TRUE);
    			} else {
    				$value['level'] = $this->home->get_level_menu($parent);
    				$value['icon']	= NULL;
    			}

    $data_menu = $value;


    $this->global->create('tbl_menus', $data_menu, TRUE);
    if ($this->db->trans_status() === FALSE) {
    	$this->db->trans_rollback();

    	$this->session->set_flashdata('error', 'value');

    		} else {
    $this->db->trans_commit();

    		}


    $this->session->set_flashdata('success','value');

    redirect('settings/menu');
    }
  }
  function group(){
    $data['title']="| Group";
    $data['group']=$this->app->group()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('setting/acl/group', $data);
    $this->load->view('layout/foot', $data);
  }
  function groupadd(){
    $data['title']="| Add Group";
    $data['group']=$this->app->group()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('setting/acl/addgroup', $data);
    $this->load->view('layout/foot', $data);
    if (isset($_POST['simpan'])) {
      $this->db->trans_begin();
    			$value = [
    				'nama_group'			=> $this->input->post('group',TRUE),
            'add_by'=>$this->session->userdata('username')];

    $data_group = $value;


    $this->global->create('tbl_group', $data_group, TRUE);
    if ($this->db->trans_status() === FALSE) {
    	$this->db->trans_rollback();

    	$this->session->set_flashdata('error', 'value');

    		} else {
    $this->db->trans_commit();

    		}


    $this->session->set_flashdata('success','value');

    redirect('settings/group');
    }
  }
  function groupedit(){
    $id=base64_decode($this->uri->segment(4));
    $data['title']="| Add Group";
    $data['group']=$this->app->groupdetil($id);
    $this->load->view('layout/head', $data);
    $this->load->view('setting/acl/editgroup', $data);
    $this->load->view('layout/foot', $data);
    if (isset($_POST['simpan'])) {
      $this->db->trans_begin();
    			$value = [
    				'nama_group'			=> $this->input->post('group',TRUE),
            'add_by'=>$this->session->userdata('username')
];

    $data_group = $value;

$id=$this->input->post('id');
    	$this->global->update('tbl_group', $data_group, ['id' => $id]);
    if ($this->db->trans_status() === FALSE) {
    	$this->db->trans_rollback();

    	$this->session->set_flashdata('error', 'value');

    		} else {
    $this->db->trans_commit();

    		}


    $this->session->set_flashdata('success','value');

    redirect('settings/group');
    }
  }
  function role(){
    $data['title']="| Role";
    $data['role']=$this->app->role()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('setting/acl/role', $data);
    $this->load->view('layout/foot', $data);

  }
  function roleadd(){
    $data['title']="| Role Add";
    $data['role']=$this->app->role()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('setting/acl/roleadd', $data);
    $this->load->view('layout/foot', $data);
    if (isset($_POST['simpan'])) {
      $this->db->trans_begin();
    			$value = [
    				'role_name'=> $this->input->post('role',TRUE),
            'module'=> $this->input->post('module',TRUE),
            'method'=> $this->input->post('method',TRUE),
            'add_by'=>$this->session->userdata('username')
];

    $role = $value;


    $this->global->create('tbl_role', $role, TRUE);
    if ($this->db->trans_status() === FALSE) {
    	$this->db->trans_rollback();

    	$this->session->set_flashdata('error', 'value');

    		} else {
    $this->db->trans_commit();

    		}


    $this->session->set_flashdata('success','value');

    redirect('settings/role');
    }
  }
  function roleedit(){
    $id=base64_decode($this->uri->segment(4));
    $data['role']=$this->app->roledetil($id);

    $data['title']="| Role Edit";

    $this->load->view('layout/head', $data);
    $this->load->view('setting/acl/roleedit', $data);
    $this->load->view('layout/foot', $data);
    if (isset($_POST['simpan'])) {
          $this->db->trans_begin();
    			$value = [
    				'role_name'=> $this->input->post('role',TRUE),
            'module'=> $this->input->post('module',TRUE),
            'method'=> $this->input->post('method',TRUE),
            'update_by'=>$this->session->userdata('username')];
    $role = $value;
    $id=$this->input->post('id');
    $this->global->update('tbl_role', $role , ['id' => $id]);
    if ($this->db->trans_status() === FALSE) {
    	$this->db->trans_rollback();
    	$this->session->set_flashdata('error', 'value');
    		} else {
    $this->db->trans_commit();
    		}
    $this->session->set_flashdata('success','value');
    redirect('settings/role');
    }
  }
  function role_permission(){
    $data['title']="| Assign Permission";
    $data['role']=$this->app->role()->result();
    $data['menu']=$this->app->menuactive()->result();
    $data['group']=$this->app->menuper()->result();
    $data['groupid']=$this->app->group()->result();
    $data['user']=$this->app->user()->result();
    $data['userid']=$this->app->userid()->result();
    $data['company']=$this->app->getcompany()->result();
    $data['companyid']=$this->app->companyid()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('setting/permission/role_permission', $data);
    $this->load->view('layout/foot', $data);

    if (isset($_POST['role'])) {
      $this->db->trans_begin();
      $value = [
        'role_id'=> $this->input->post('roleid',TRUE),
        'user_id'=> $this->input->post('user',TRUE),
        'add_by'=>$this->session->userdata('username')];
$role = $value;
$this->global->create('tbl_role_permission', $role, TRUE);
if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();
  $this->session->set_flashdata('error', 'value');
    } else {
$this->db->trans_commit();
    }
$this->session->set_flashdata('success','value');
redirect('settings/role-permission','refresh');

    }
    if (isset($_POST['menu'])) {
      $this->db->trans_begin();
      $value = [
        'menu_id'=> $this->input->post('menuid',TRUE),
        'group_id'=> $this->input->post('groupid',TRUE),
        'add_by'=>$this->session->userdata('username')];
$role = $value;
$this->global->create('tbl_group_permission', $role, TRUE);
if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();
  $this->session->set_flashdata('error', 'value');
    } else {
$this->db->trans_commit();
    }
$this->session->set_flashdata('success','value');
redirect('settings/role-permission','refresh');
    }
    if (isset($_POST['company'])) {
      $this->db->trans_begin();
      $value = [
        'user_id'=> $this->input->post('userid',TRUE),
        'company_id'=> $this->input->post('companyid',TRUE),
        'add_by'=>$this->session->userdata('username')];
$role = $value;
$this->global->create('tbl_company_permission', $role, TRUE);
if ($this->db->trans_status() === FALSE) {
  $this->db->trans_rollback();
  $this->session->set_flashdata('error', 'value');
    } else {
$this->db->trans_commit();
    }
$this->session->set_flashdata('success','value');
redirect('settings/role-permission','refresh');
    }
  }
  function role_permissionadd(){
    $data['title']="| Role Add";
    $data['role']=$this->app->role()->result();
    $this->load->view('layout/head', $data);
    $this->load->view('setting/acl/roleadd', $data);
    $this->load->view('layout/foot', $data);
  }
  function role_delete(){

      $id=$this->db->where('id', $this->input->post('id'));
       $this->db->delete('tbl_role_permission');

  }
  function menu_delete(){

      $id=$this->db->where('id', $this->input->post('id'));
       $this->db->delete('tbl_group_permission');

  }
  function company_delete(){
    $id=$this->db->where('id', $this->input->post('id'));
     $this->db->delete('tbl_company_permission');
  }

}
