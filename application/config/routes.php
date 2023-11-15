<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] 		= 'UserController/index';
$route['dashboard']          		= 'AdminController/dashboard';
$route['navbar/list']		 		= 'AdminController/navbar_list';
$route['navbar_create']		 		= 'AdminController/navbar_create';
$route['navbar_create_act']	 		= 'AdminController/navbar_create_act';
$route['navbar_update/(.*)']	 	= 'AdminController/navbar_update/$1';
$route['navbar_update_act/(.*)']	= 'AdminController/navbar_update_act/$1';
$route['navbar_delete/(.*)']		= 'AdminController/navbar_delete/$1';
$route['navbar_logo_create']		= 'AdminController/navbar_logo_create';
$route['nav_logo_create_act']		= 'AdminController/nav_logo_create_act';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
