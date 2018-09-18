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
}

/* End of file Funstion_m.php */
/* Location: ./application/models/Funstion_m.php */