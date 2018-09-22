<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = 'myerror';
$route['translate_uri_dashes'] = FALSE;
$route['welcome/dude'] =  "welcome/pilih/index";
$route['welcome/dude/change'] =  "welcome/pilih/change";
$route['settings/menu'] =  "home/acl/acl";
$route['settings/menu/add'] =  "home/acl/acl/menuadd";
$route['settings/menu/edit/(:any)'] =  "home/acl/acl/editmenu/$1";
$route['settings/group'] =  "home/acl/acl/group";
$route['settings/group/add'] =  "home/acl/acl/groupadd";
$route['settings/group/edit/(:any)'] =  "home/acl/acl/groupedit/$1";
$route['settings/role'] =  "home/acl/acl/role";
$route['settings/role/add'] =  "home/acl/acl/roleadd";
$route['settings/role/edit/(:any)'] =  "home/acl/acl/roleedit/$1";
$route['settings/role-permission'] =  "home/acl/acl/role_permission";
$route['settings/role/delete'] =  "home/acl/acl/role_delete";
$route['settings/menu/delete'] =  "home/acl/acl/menu_delete";
$route['settings/company/delete'] =  "home/acl/acl/company_delete";

///data master
$route['masters/company'] =  "home/master/master";
$route['masters/company/edit/(:any)'] =  "home/master/master/companyedit/$1";
$route['masters/employee'] =  "home/master/master/employee";
$route['masters/employee/add'] =  "home/master/master/employeeadd";
$route['masters/employee/simpan'] =  "home/master/master/simpanemploye";
