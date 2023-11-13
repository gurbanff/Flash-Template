<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'UserController/index';
$route['dashboard']          = 'AdminController/dashboard';
$route['navbar/list']		 = 'AdminController/navbar_list';
$route['navbar_create']		 = 'AdminController/navbar_create';
$route['navbar_create_act']		 = 'AdminController/navbar_create_act';







$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
