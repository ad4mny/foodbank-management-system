<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'IndexController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'LoginController/index';
$route['login/verify'] = 'LoginController/login_user';
$route['login/logout'] = 'LoginController/logout';

$route['register'] = 'RegisterController/index';
$route['register/new'] = 'RegisterController/register_new_user';

$route['bank'] = 'BankController/index';
$route['about'] = 'AboutController/index';


