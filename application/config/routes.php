<?php
defined('BASEPATH') or exit('No direct script access allowed');

#------------ Login -----------------------------

$route['default_controller'] = 'LogonDashboard/login';
// $route['login'] = 'LogonDashboard/login';
/* login & forgot password */
$route['login'] = 'user/login/index';
$route['forgot_password/(:any)/(:any)'] = 'user/login/forgot_password/$1/$2';
$route['logout'] = 'user/login/logout';
$route['login1'] = 'login_old';


/* admin */
$route['sitemap'] = 'user/login/site_map';
$route['user_list'] = 'user/user/user_list';
$route['group_master'] = 'user/user/groupMaster';
$route['group_menu'] = 'user/user/groupMenu';

$route['group_menu'] = 'user/user/groupMenu';

/* citizen */
$route['citizen'] = 'citizen/citizen/citizen_list';
$route['citizen_registration'] = 'citizen/citizen/index';
$route['citizen_login'] = 'user/login/index';
$route['garbage_pickup_request'] = 'citizen/citizen/garbagePickupRequestListing';
$route['add_garbage_pickup_request'] = 'citizen/citizen/addGarbagePickupRequest';
$route['garbage_pickup_request_details/(:any)'] = 'citizen/citizen/garbagePickupRequestDetails';




/* system template */
$route['404_override'] = 'user/user/page_not_found';
$route['page_not_found'] = 'user/user/page_not_found_view';


/*   api execute */
$route['WS'] = "wsengine/api_execute/wscontroller";
$route['WS/(:any)'] = "wsengine/api_execute/wscontroller/$1";
$route['WS/(:any)/(:any)'] = "wsengine/api_execute/wscontroller/$1/$2";

$GLOBALS = false;
if (($this->uri->segments[1] == "WS" )) {
	$GLOBALS = true;
}