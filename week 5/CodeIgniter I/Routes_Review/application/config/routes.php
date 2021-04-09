<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                               //controllername/method
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['hello/(:any)/(:any)'] = 'main/hello/$1/&2';
// $route['return'] = 'surveys/process_form';
$route['translate_uri_dashes'] = FALSE;
//end of routes.php