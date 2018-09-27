<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function getlogin($fid,$pass){
    return $this->db->get_where('view_act_login', ['fid'=>$fid,'pass'=>base64_encode($pass),'status'=>1]);
  }
function getapp(){
  return $this->db->get('tbl_app')->row();
}
function getcompany(){
  return $this->db->get('tbl_company');
}
function getcompanydetil($id){
  return $this->db->get_where('tbl_company',['id'=>$id])->row();

}
function getmenu(){
  return $this->db->get('tbl_menus');

}
function getmenudetil($id){
  return $this->db->get_where('tbl_menus',['id'=>$id]);

}
function logs($table,$type,$data){
	$this->db->insert('tbl_logs', ['table_name'=>$table,'type_log'=>$type,'activity'=>$data]);
	return false;

}
function group(){
  return $this->db->get('tbl_group');
}
function groupdetil($id){
    return $this->db->get_where('tbl_group',['id'=>$id])->row();
}
function role(){
return $this->db->get('tbl_role');
}
function roledetil($id){
  return $this->db->get_where('tbl_role',['id'=>$id])->row();
}
function role_permission(){
return $this->db->get('tbl_role_permission');
}
function role_permissionditel($id){

}
function user(){
  return $this->db->get('view_role');
}
function menuper(){
  return $this->db->get('view_menu');
}
function company(){
  return $this->db->get('tbl_company');
}
function companyid(){
  return $this->db->get('view_company');
}
function userid(){
  return $this->db->get('tbl_users');
}
function getcompany_id(){
  return $this->db->get_where('view_company',['user_id'=>$this->session->userdata('user_id')]);
}
function reportcompany(){
  return $this->db->get('view_report_company');
}
function getidcompany($id){
  return $this->db->get_where('tbl_company',['id'=>base64_decode($id)]);
}
function getemployee($id){

  $this->db->order_by('emp_name', 'asc');
  return $this->db->get_where('view_employee',['company_id'=>$id]);
}
function emptype(){
  return $this->db->get('tbl_emp_type');
}
function emptypeid($id){
  return $this->db->get_where('tbl_emp_type',['id'=>base64_decode($id)])->row();
}
function dept(){
return $this->db->get('tbl_dept');
}
function deptid($id){
  return $this->db->get_where('tbl_dept',['id'=>$id])->row();
}
function position(){
return $this->db->get('tbl_position');
}
function positionid($id){
  return $this->db->get_where('tbl_position',['id'=>base64_decode($id)])->row();
}
function bank(){
  return $this->db->get('tbl_bank');
}
function agama(){
  return $this->db->get('tbl_agama');
}
function agamaid($id){
  return $this->db->get_where('tbl_agama',['id'=>$id])->row();
}
function edu(){
  return $this->db->get('tbl_edu');
}
function eduid($id){
  return $this->db->get_where('tbl_edu',['id'=>base64_decode($id)])->row();
}
function maxid($id,$table){
  $this->db->select_max($id);
  $cek=$this->db->get($table)->row();
  return $cek;
}
function editemployee($id){
return $this->db->get_where('view_employee',['emp_id'=>base64_decode($id)])->row();
}
function cekpass($id){
  return $this->db->get_where('tbl_users',['id_emp'=>base64_decode($id)]);
}
function menuactive(){
  return $this->db->get_where('tbl_menus',['is_published'=>1]);
}
function insentif(){
  return $this->db->get('tbl_insentif');
}
function insentifid($id){
  return $this->db->get_where('tbl_insentif',['id'=>base64_decode($id)])->row();
}
function getmanager($id){
$cek=$this->db->get_where('view_employee',['emp_id'=>$id]);

if ($cek->num_rows()>0) {
  foreach ($cek->result() as $key) {
    $manager=$key->manager_id;
  }
  return $this->db->get_where('view_employee',['manager_id'=>$manager])->row();

}


}
function getUmur($id){
$cek=$this->db->get_where('view_employee',['emp_id'=>base64_decode($id)])->row();
$ttl=new datetime($cek->birth_date);
$today=new DateTime();
return $umur=$today->diff($ttl)->y." Years Old";


}
function getMasaKerja($id){
$cek=$this->db->get_where('view_employee',['emp_id'=>base64_decode($id)])->row();
$ttl=new datetime($cek->join_date);
$today=new DateTime();
return $umur=$today->diff($ttl)->y." Years ".$today->diff($ttl)->m." Month";


}
function hitungCuti($tglawal,$tglakhir,$delimiter){
  $tgl_awal = $tgl_akhir = $minggu = $sabtu = $koreksi = $libur = 0;
    $liburnasional = array("01-05-2014","15-05-2014","27-05-2014","29-05-2014");

//    memecah tanggal untuk mendapatkan hari, bulan dan tahun
    $pecah_tglawal = explode($delimiter, $tglawal);
    $pecah_tglakhir = explode($delimiter, $tglakhir);

//    mengubah Gregorian date menjadi Julian Day Count
    $tgl_awal = gregoriantojd($pecah_tglawal[1], $pecah_tglawal[0], $pecah_tglawal[2]);
    $tgl_akhir = gregoriantojd($pecah_tglakhir[1], $pecah_tglakhir[0], $pecah_tglakhir[2]);

//    mengubah ke unix timestamp
    $jmldetik = 24*3600;
    $a = strtotime($tglawal);
    $b = strtotime($tglakhir);

//    menghitung jumlah libur nasional
    for($i=$a; $i<$b; $i+=$jmldetik){
        foreach ($liburnasional as $key => $tgllibur) {
            if($tgllibur==date("d-m-Y",$i)){
                $libur++;
            }
        }
    }

//    menghitung jumlah hari minggu
    for($i=$a; $i<$b; $i+=$jmldetik){
        if(date("w",$i)=="0"){
            $minggu++;
        }
    }

//    menghitung jumlah hari sabtu
    for($i=$a; $i<$b; $i+=$jmldetik){
        if(date("w",$i)=="6"){
            $sabtu++;
        }
    }

//    dijalankan jika $tglakhir adalah hari sabtu atau minggu
    if(date("w",$b)=="0" || date("w",$b)=="6"){
        $koreksi = 1;
    }

//    mengitung selisih dengan pengurangan kemudian ditambahkan 1 agar tanggal awal cuti juga dihitung
    $jumlahcuti =  $tgl_akhir - $tgl_awal - $libur - $minggu - $sabtu - $koreksi + 1;
    return $jumlahcuti;

}
function getFamily($id){
  return $this->db->get_where('tbl_family',['emp_id'=>base64_decode($id)]);
}
function getPhoto(){
  return $this->db->get_where('tbl_employee',['id'=>$this->session->userdata('emp_id')])->row();
}

}
