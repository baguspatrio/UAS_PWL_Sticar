<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Display';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// $route['admin']='Admin/Admin';
$route['tambahdriver'] = 'Admin/tambahdriver';
$route['tampildatadriver'] = 'Admin/tampildatadriver';
$route['tampildatapengiklan']='Display/tampildatapengiklan';
$route['pengiklanterverifikasi'] = 'Display/terverivikasi';
$route['tambahpengiklan']='Display/tambahpengiklan';
$route['tambahkendaraan'] = 'Admin/tambahkendaraan';
$route['tampildatakendaraan']='Admin/tampildatakendaraan';
$route['tambahiklan'] = 'Iklan/tambahiklan';
$route['admin'] = 'Iklan';
$route['tampildatakaryawan']='Admin/tampildatakaryawan';
$route['tambahkaryawan']='Admin/tambahkaryawan';
$route['logout']='Login/logout';
$route['dashboard']='Display/dashboardpengiklan';
$route['pengiklan']='PengiklanLogin';
