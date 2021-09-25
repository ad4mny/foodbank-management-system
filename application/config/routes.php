<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'IndexController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'LoginController/index';
$route['login/verify'] = 'LoginController/loginUser';
$route['logout'] = 'LoginController/logout';

$route['register'] = 'RegisterController/index';
$route['register/new'] = 'RegisterController/registerUser';

$route['foodbank'] = 'FoodbankController/index';
$route['foodbank/take/(:any)'] = 'FoodbankController/addFoodbankItem/$1';
$route['donation'] = 'DonationController/index';
$route['about'] = 'AboutController/index';
$route['history'] = 'HistoryController/index';

$route['admin/(:any)'] = 'AdminController/index/$1';
$route['admin/login/submit'] = 'AdminController/loginUser';

$route['admin/foodbank/add'] = 'AdminController/index/add';
$route['admin/foodbank/update/(:num)'] = 'AdminController/index/update/$1';
$route['admin/foodbank/delete/(:num)'] = 'AdminController/deleteItem/$1';

$route['admin/foodbank/add/submit'] = 'AdminController/addItem';
$route['admin/foodbank/update/submit'] = 'AdminController/updateItem';

// API 
$route['api/get_login'] = 'LoginController/loginUserAPI';
$route['api/get_signup'] = 'RegisterController/registerUserAPI';
$route['api/get_foodbank'] = 'FoodbankController/getFoodbankAPI';
$route['api/get_history'] = 'HistoryController/getHistoryAPI';
$route['api/set_taken'] = 'HistoryController/setItemTakenAPI';
$route['api/set_take_item'] = 'FoodbankController/addFoodbankItemAPI';
$route['api/set_remove_item'] = 'FoodbankController/removeFoodbankItemAPI';
$route['api/get_donation'] = 'DonationController/getFoodbankAPI';
