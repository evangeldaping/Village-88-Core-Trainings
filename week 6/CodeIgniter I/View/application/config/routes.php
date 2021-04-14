<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['ninjas/(:any)'] = 'main/ninjas/$1';
$route['say/(:any)/(:any)'] = 'users/say/$1/$2';
$route['users/create'] = 'users/create';
$route['404_override'] = '';

//end of routes.php