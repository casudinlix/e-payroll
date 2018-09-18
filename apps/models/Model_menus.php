<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_menus extends CI_Model {

	public function get_list_menus($group_id, $level = null, $parent = null)
	{
        $this->db->select('*')
                    ->from('view_menu')

                    ->where('group_id', $group_id)
                    ->where('is_published', 1)
                    ->order_by('menu', 'ASC');


        if($level !== null)
            $this->db->where('level', $level);

        if($parent !== null)
            $this->db->where('parent', $parent);

        $query = $this->db->get();

        if($query->num_rows() > 0)
            $result = $query->result_array();
        else
            $result = array();

        return $result;
	}



}

/* End of file Model_menus.php */
/* Location: ./application/models/Model_menus.php */
