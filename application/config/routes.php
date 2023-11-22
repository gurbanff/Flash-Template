<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] 			= 'UserController/index';
$route['dashboard']          			= 'AdminController/dashboard';
// Navbar
$route['navbar/list']		 			= 'AdminController/navbar_list';
$route['navbar_create']		 			= 'AdminController/navbar_create';
$route['navbar_create_act']	 			= 'AdminController/navbar_create_act';
$route['navbar_update/(.*)']	 		= 'AdminController/navbar_update/$1';
$route['navbar_update_act/(.*)']		= 'AdminController/navbar_update_act/$1';
$route['navbar_delete/(.*)']			= 'AdminController/navbar_delete/$1';
$route['navbar_logo_create']			= 'AdminController/navbar_logo_create';
$route['nav_logo_create_act']			= 'AdminController/nav_logo_create_act';
$route['navbar_logo_update/(.*)']		= 'AdminController/navbar_logo_update/$1';
$route['nav_logo_update_act/(.*)']		= 'AdminController/nav_logo_update_act/$1';
$route['navbar_logo_delete/(.*)']		= 'AdminController/navbar_logo_delete/$1';
// Header
$route['header_list']					= 'AdminController/header_list';
$route['header_create']					= 'AdminController/header_create';
$route['header_create_act']				= 'AdminController/header_create_act';
$route['header_view/(.*)']			    = 'AdminController/header_view/$1';
$route['header_update/(.*)']			= 'AdminController/header_update/$1';
$route['header_update_act/(.*)']		= 'AdminController/header_update_act/$1';
$route['header_delete/(.*)']			= 'AdminController/header_delete/$1';
$route['header_img_create']				= 'AdminController/header_img_create';
$route['header_img_create_act']			= 'AdminController/header_img_create_act';
$route['header_img_update/(.*)']		= 'AdminController/header_img_update/$1';
$route['header_img_update_act/(.*)']	= 'AdminController/header_img_update_act/$1';
$route['header_img_delete/(.*)']		= 'AdminController/header_img_delete/$1';
// Header Footer
$route['header_bottom_create']			= 'AdminController/header_bottom_create';
$route['header_bottom_create_act']		= 'AdminController/header_bottom_create_act';
$route['header_bottom_update/(.*)']		= 'AdminController/header_bottom_update/$1';
$route['header_bottom_update_act/(.*)']	= 'AdminController/header_bottom_update_act/$1';
$route['header_bottom_delete/(.*)']		= 'AdminController/header_bottom_delete/$1';
$route['header_bottomR_create']			= 'AdminController/header_bottomR_create';
$route['header_bottomR_create_act']		= 'AdminController/header_bottomR_create_act';
$route['header_bottomR_update/(.*)']		= 'AdminController/header_bottomR_update/$1';
$route['header_bottomR_update_act/(.*)']	= 'AdminController/header_bottomR_update_act/$1';
$route['header_bottomR_delete/(.*)']		= 'AdminController/header_bottomR_delete/$1';
// About
$route['about_list']   	   		 = 'AdminController/about_list';
$route['about_create']     		 = 'AdminController/about_create';
$route['about_create_act'] 		 = 'AdminController/about_create_act';
$route['about_view/(.*)']  		 = 'AdminController/about_view/$1';
$route['about_update/(.*)']  	 = 'AdminController/about_update/$1';
$route['about_update_act/(.*)']  = 'AdminController/about_update_act/$1';
$route['about_delete/(.*)']      = 'AdminController/about_delete/$1';
// About Bottom Left
$route['about_bottom1_create']       		 = 'AdminController/about_bottom1_create';
$route['about_bottom1_create_act']   		 = 'AdminController/about_bottom1_create_act';
$route['about_bottom1_update/(.*)']          = 'AdminController/about_bottom1_update/$1';
$route['about_bottom1_update_act/(.*)']      = 'AdminController/about_bottom1_update_act/$1';
$route['about_bottom1_delete/(.*)']          = 'AdminController/about_bottom1_delete/$1';
// About Bottom Center
$route['about_bottom2_create']       		 = 'AdminController/about_bottom2_create';
$route['about_bottom2_create_act']   		 = 'AdminController/about_bottom2_create_act';
$route['about_bottom2_update/(.*)']          = 'AdminController/about_bottom2_update/$1';
$route['about_bottom2_update_act/(.*)']      = 'AdminController/about_bottom2_update_act/$1';
$route['about_bottom2_delete/(.*)']          = 'AdminController/about_bottom2_delete/$1';
// About Bottom Right
$route['about_bottom3_create']       		 = 'AdminController/about_bottom3_create';
$route['about_bottom3_create_act']   		 = 'AdminController/about_bottom3_create_act';
$route['about_bottom3_update/(.*)']          = 'AdminController/about_bottom3_update/$1';
$route['about_bottom3_update_act/(.*)']      = 'AdminController/about_bottom3_update_act/$1';
$route['about_bottom3_delete/(.*)']          = 'AdminController/about_bottom3_delete/$1';











$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
