<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'products';
$route['products/new'] = 'products/add';
$route['products/show'] = 'products/show';
$route['products/update'] = 'products/update';
$route['products/remove'] = 'products/remove';
$route['reset'] = 'reset';
$route['404_override'] = '';

//end of routes.php