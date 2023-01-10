<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'FrontController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Authentications */
$route['home'] = 'FrontController/home';

$route['login']='FrontController/index';

$route['logout']='FrontController/makeUserLogout';

$route['admin/product'] 							= 'FrontController/listproduct';
$route['admin/product/add'] 						= 'FrontController/addproduct';
$route['admin/product/edit/(:num)'] 				= 'FrontController/editproduct/$1';
$route['admin/product/delete/(:num)'] 				= 'FrontController/deleteproduct/$1';


$route['admin'] = 'LoginController/showAdminLogin';
$route['admin/home'] = 'AdminController/index';

$route['admin/service'] = 'AdminController/listService';
$route['admin/service/add'] = 'AdminController/addService';
$route['admin/service/edit/(:num)'] = 'AdminController/editService/$1';
$route['admin/service/delete/(:num)'] = 'AdminController/deleteService/$1';

$route['admin/bike'] = 'AdminController/listbike';
$route['admin/bike/add'] = 'AdminController/addbike';
$route['admin/bike/edit/(:num)'] = 'AdminController/editbike/$1';
$route['admin/bike/delete/(:num)'] = 'AdminController/deletebike/$1';

$route['admin/servicecomplete'] = 'AdminController/listServicecomplete';
$route['admin/servicecomplete/add'] = 'AdminController/addServicecomplete';
$route['admin/servicecomplete/edit/(:num)'] = 'AdminController/editServicecomplete/$1';
$route['admin/servicecomplete/delete/(:num)'] = 'AdminController/deleteServicecomplete/$1';

$route['admin/logout'] = 'LoginController/makeAdminLogout';



