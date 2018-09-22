 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Funstion_m extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}
	function getmenu(){
		return $this->db->get('tbl_menus');
	}
function getrole(){
return $this->db->get('tbl_role');
}
function getroledetil($id){
	return $this->db->get_where('tbl_role', ['id'=>$id]);

}
function assignmenu(){
	return $this->db->get('tbl_group');
}
function getmenudetil($id){
	return $this->db->get_where('view_menu',['group_id'=>$id]);
}
function getroleuser($id){
	return $this->db->get_where('view_users_role',['user_id'=>$id]);
}
function getusers(){
	return $this->db->get('view_users');
}
function nip(){
  $q = $this->db->query("SELECT MAX(RIGHT(new_nip,4)) AS kd_max FROM tbl_employee");
     $kd = "";
     if($q->num_rows()>0){
         foreach($q->result() as $k){
             $tmp = ((int)$k->kd_max)+1;
             $kd = sprintf("%04s", $tmp);
         }
     }else{
         $kd = "0001";
     }
     date_default_timezone_set('Asia/Jakarta');
     return date('ym').$kd;
}
}

/* End of file Funstion_m.php */
/* Location: ./application/models/Funstion_m.php */
