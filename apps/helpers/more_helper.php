<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function this_login(){

	$CI = &get_instance();
	if ($CI->session->userdata('login')) {
		return true;
	} else {
		return false;
	}
}

function clean($string) {
   return str_replace(array('=', '.', '='),array('', '%', '_'),base64_encode($string));
}
function tanggal($data){
	return date("Y-m-d", strtotime($data));
}
function getRomawi($bln){
        switch ($bln){
        case 1:
            return "I";
        break;
        case 2:
            return "II";
        break;
        case 3:
            return "III";
        break;
        case 4:
            return "IV";
        break;
        case 5:
            return "V";
        break;
        case 6:
            return "VI";
        break;
        case 7:
            return "VII";
        break;
        case 8:
            return "VIII";
        break;
        case 9:
            return "IX";
        break;
        case 10:
            return "X";
        break;
        case 11:
            return "XI";
        break;
        case 12:
            return "XII";
        break;
        }
        }
function group(){
$ci =& get_instance();
$ci->load->model('home_model','home');
    //$data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
    return $ci->home->getprofil($ci->session->group_id);

}
function get_all_menu(){

	$ci =& get_instance();
    $ci->load->model('model_menus','menus');
    $menus = $ci->menus->get_list_menus($ci->session->group_id, 0, NULL);

        $menu_list = '';
        foreach($menus as $m) {
            // level 0 as parent
            $id = $m['menu_id'];

            // level 1
            $menu1 = $ci->menus->get_list_menus($ci->session->group_id, 1, $id);
            if(count($menu1) > 0) {
                $menu_list .= '<li><a href="javascript:;"><i class="fa '.$m['icon'].'"></i><span class="title">'.$m['menu'].'</span><span class="arrow"></span></a>';
                $menu_list .= '<ul class="sub-menu">';

                foreach($menu1 as $m1) {
                    $id = $m1['menu_id'];

                    // level 2
                    $menu2 = $ci->menus->get_list_menus($ci->session->group_id, 2, $id);
                    if(count($menu2) > 0) {
    $menu_list .= '<li><a href="javascript:;"><span class="fa fa-check-circle"></span>'.$m1['menu'].'<span class="arrow"></span></a>';
                        $menu_list .= '<ul class="sub-menu">';
                        foreach($menu2 as $m2) {
                            $id = $m2['menu_id'];

                            // level 3
                            $menu3 = $ci->menus->get_list_menus($ci->session->group_id, 3, $id);
                            if(count($menu3) > 0) {
                                $menu_list .= '<li><a>'.$m2['menu'].'</a>';
                                $menu_list .= '<ul class="sub-menu">';
                                foreach($menu3 as $m3) {
                                    // $active = ($ci->uri->segment(1) == $m3['link']) ? 'class="active"':'';
                                    $menu_list .= '<li></a><ahref="'.base_url($m3['link']).'">'.$m3['menu'].'</a></li>';
                                }
                                $menu_list .= '</ul></li>';
                            } else {
                                // $active = ($ci->uri->segment(1) == $m2['link']) ? 'class="active"':'';
                                $menu_list .= '<li><a href="'.base_url($m2['link']).'">'.$m2['menu'].'</a></li>';
                            }
                        }
                        $menu_list .= '</ul></li>';
                    } else {
                        // $active = ($ci->uri->segment(1) == $m1['link']) ? 'class="active"':'';
                        $menu_list .= '<li><a href="'.base_url($m1['link']).'">'.$m1['menu'].'</a></li>';
                    }
                }
                $menu_list .= '</ul></li>';
            } else {
                // $active = ($ci->uri->segment(1) == $m['link']) ? 'class="active"':'';
                $menu_list .= '<li><a href="'.base_url($m['link']).'"><i class="fa '.$m['icon'].'"></i> '.$m['menu'].'</a></li>';
            }

            //dd($m['id']);
        }

        return $menu_list;
}
