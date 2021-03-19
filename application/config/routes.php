<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['logout'] = 'Auth/logout';
$route['forgot'] = 'Auth/forgot';
$route['change'] = 'Auth/change';

// $route['logindosen'] = 'Authdosen';
// $route['forgotdosen'] = 'Authdosen/forgot';
// $route['changedosen'] = 'Authdosen/change';
// $route['logoutdosen'] = 'Authdosen/logoutdosen';

//Mahasiswa
$route['mahasiswa'] = 'mahasiswa/Dashboard';
$route['perwalian'] = 'mahasiswa/Perwalian';
$route['perwalian1'] = 'mahasiswa/Perwalian/perwalian1';
$route['perwalian2'] = 'mahasiswa/Perwalian/perwalian2';
$route['perwalian3'] = 'mahasiswa/Perwalian/perwalian3';
$route['perwalian4'] = 'mahasiswa/Perwalian/perwalian4';
$route['perwalian5'] = 'mahasiswa/Perwalian/perwalian5';
$route['perwalian6'] = 'mahasiswa/Perwalian/perwalian6';
$route['perwalian7'] = 'mahasiswa/Perwalian/perwalian7';
$route['perwalian8'] = 'mahasiswa/Perwalian/perwalian8';
$route['perwaliansemua'] = 'mahasiswa/Perwalian/perwaliansemua';
$route['jadwal'] = 'mahasiswa/Perwalian/jadwal';
$route['jadwal1'] = 'mahasiswa/Perwalian/jadwal1';
$route['jadwal2'] = 'mahasiswa/Perwalian/jadwal2';
$route['jadwal3'] = 'mahasiswa/Perwalian/jadwal3';
$route['jadwal4'] = 'mahasiswa/Perwalian/jadwal4';
$route['jadwal5'] = 'mahasiswa/Perwalian/jadwal5';
$route['jadwal6'] = 'mahasiswa/Perwalian/jadwal6';
$route['jadwal7'] = 'mahasiswa/Perwalian/jadwal7';
$route['jadwal8'] = 'mahasiswa/Perwalian/jadwal8';
$route['jadwalsemua'] = 'mahasiswa/Perwalian/jadwalsemua';
$route['bdatm'] = 'mahasiswa/Perwalian/bdatm';
$route['krs'] = 'mahasiswa/Perwalian/krs';
$route['insertperwalian'] = 'mahasiswa/Perwalian/insertperwalian';
$route['batal'] = 'mahasiswa/Perwalian/batal';
$route['cetak'] = 'mahasiswa/Perwalian/cetak';

//Dosen
$route['dosen'] = 'dosen/Dashboard';
$route['daftarmhs'] = 'dosen/Approval';
$route['insertapproval'] = 'dosen/Approval/insertapproval';
$route['detail/(:any)'] = 'dosen/Approval/approve/$1';

