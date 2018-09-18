<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['welcome/dude'] =  "welcome/pilih/index";
$route['welcome/dude/change'] =  "welcome/pilih/change";
$route['ecommers/order/detil/(:any)'] =  "admin/ecommers/ecommers/orderdetil/$1";
