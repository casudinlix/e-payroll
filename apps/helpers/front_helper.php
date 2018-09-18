<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('tema')){

	function tema($uri = '',$protocol = NULL){
		$CI =& get_instance();
		$tema="public/assets";


		$tema.="/";
		$tema.=$uri;

	return $CI->config->base_url($tema, $protocol);

	}
	function icon($uri = '',$protocol = NULL){
		$CI =& get_instance();
		$icon="public/img";


		$icon.="/";
		$icon.=$uri;

	return $CI->config->base_url($icon, $protocol);


	}
	function logo($uri = '',$protocol = NULL){
		$CI =& get_instance();
		$logo="surat/logo";


		$logo.="/";
		$logo.=$uri;

	return $CI->config->base_url($logo, $protocol);

	}
	function format_tanggal($tanggal,$jam=false){

 $tanggal_terbentuk="";

 $tanggal=explode(" ",$tanggal);

 $set1=explode("-",$tanggal[0]);


 switch ($set1[1]) {
 	case '01':
 		$tanggal_terbentuk.="January";
 		break;

 	case '02':
 		$tanggal_terbentuk.="February";
 		break;

 	case '03':
 		$tanggal_terbentuk.="March";
 		break;

 	case '04':
 		$tanggal_terbentuk.="April";
 		break;

 	case '05':
 		$tanggal_terbentuk.="May";
 		break;

 	case '06':
 		$tanggal_terbentuk.="June";
 		break;

 	case '07':
 		$tanggal_terbentuk.="July";
 		break;

 	case '08':
 		$tanggal_terbentuk.="August";
 		break;

 	case '09':
 		$tanggal_terbentuk.="September";
 		break;

 	case '10':
 		$tanggal_terbentuk.="Octobar";
 		break;

 	case '11':
 		$tanggal_terbentuk.="November";
 		break;

 	case '12':
 		$tanggal_terbentuk.="December";
 		break;



 }

 $tanggal_terbentuk.=" ".$set1[2];
 $tanggal_terbentuk.=",".$set1[0];

if($jam==true){
	$tanggal_terbentuk.=" ".$tanggal[1];
}
return $tanggal_terbentuk;
}
function fotouser($uri = '',$protocol = NULL){
	$CI =& get_instance();
		$tema="public/assets/images/users";


		$tema.="/";
		$tema.=$uri;

	return $CI->config->base_url($tema, $protocol);
}
function linkurl($string){
	return str_replace(array(" ",",",".","+","&","#"), "-", $string);
}
function judulbuku($string){
	str_replace(array("&","#","+","-","%","a-z 0-9~%.:_\-")," ",$string);
}
}
