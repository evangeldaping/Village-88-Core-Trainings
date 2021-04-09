<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                               //controllername/method
$route['default_controller'] = 'surveys/process_form';
$route['404_override'] = '';
$route['results'] = 'results/submit_form';
$route['return'] = 'surveys/process_form';
$route['translate_uri_dashes'] = FALSE;
//end of routes.php