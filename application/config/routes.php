<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'IndexController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'LoginController/loginAuth';
$route['logout'] = 'LoginController/logout';
$route['signup'] = 'LoginController/createUserAccount';