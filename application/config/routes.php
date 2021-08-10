<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'IndexController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'LoginController/index';
$route['login/verify'] = 'LoginController/loginUser';
$route['logout'] = 'LoginController/logout';

$route['register'] = 'RegisterController/index';
$route['register/new'] = 'RegisterController/register_new_user';

$route['foodbank'] = 'BankController/index';
$route['foodbank/take/(:any)'] = 'BankController/addFoodbankItem/$1';
$route['about'] = 'AboutController/index';
$route['history'] = 'HistoryController/index';


