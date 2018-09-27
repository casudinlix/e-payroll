<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MX_Controller{

  public function __construct()
  {
    parent::__construct();






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
  function reportcompany(){
    $this->db->select('company_name, total');
    $cek=$this->db->get('view_report_company')->result();

      echo json_encode($cek);


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
           $row[] = "<a href='".site_url('masters/employee/edit/'.clean($key->emp_id))."' class='btn btn-warning' title='Edit'><i class='icon icon-note'></i></a>"."<a href='".site_url('masters/employee/detil/'.clean($key->emp_id))."' class='btn btn-info' title='Detail'><i class='icon icon-eyeglasses'></i></a>";

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
function uploadpict(){
  $config['upload_path'] = 'xupload/employee';
  $config['allowed_types'] = 'gif|jpg|png|jpeg';
  $config['max_size']  = '200';
  $config['encrypt_name'] = TRUE;
  $config['overwrite']     = TRUE;
  $this->load->library('upload', $config);

$this->upload->initialize($config);
$id=$this->input->post('id');
$cek=$this->db->get_where('tbl_employee',['id'=>$id])->row();

if (!empty($_FILES['file']['name'])) {

  if ($this->upload->do_upload('file'))
         {
             $gbr = $this->upload->data();
             $gambar=$gbr['file_name']; //Mengambil file name dari gambar yang diupload

             $this->db->trans_begin();
                $value = ['photo'=>$gambar];


           $book = $value;
           if ($cek->images !='null') {
             Unlink("xupload/employee/".$cek->photo);
           }

            $this->global->update('tbl_employee', $book, ['id' => $id]);
           if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();

            $this->session->set_flashdata('error', 'value');

              } else {
           $this->db->trans_commit();

              }
             $this->session->set_flashdata('success','value');

             redirect($_SERVER['HTTP_REFERER']);
         }else{
           $this->session->set_flashdata('error','value');

          redirect($_SERVER['HTTP_REFERER']);
         }

     }else{

         echo "Gagal, gambar belum di pilih";
         $this->upload->display_errors();
         $this->session->set_flashdata('error','value');

         redirect($_SERVER['HTTP_REFERER']);
 }

}
}
