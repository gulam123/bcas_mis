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
|	https://codeigniter.com/userguide3/general/routing.html
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

//login
$route['register']             = 'Auth/register';
$route['daftarakun']           = 'Auth/daftar_akun';
$route['logout']               = 'Auth/logout';

//Planning
$route['formAPM']              = 'C_apm/Apm';
$route['formSchedule']         = 'C_schedule';
$route['formSuratTugas']       = 'C_surat_tugas';

//Pemeriksaan
$route['formPemeriksaan']      = 'C_pemeriksaan/Pemeriksaan';
$route['formDokumentasi']      = 'C_dokumentasi';
$route['formKonfirmasi']       = 'C_konfirmasi';
$route['formAnomali']          = 'C_anomali';

//CA
$route['Anomali']              = 'C_anomali/anomali';
$route['namaibu']              = 'C_anomali';
$route['nik']                  = 'C_anomali/nik';
$route['npwp']                 = 'C_anomali/npwp';
$route['umum']                 = 'C_anomali/umum';
$route['alamat']               = 'C_anomali/alamat';
$route['ListData']             = 'C_anomali/ListDataIbu';
$route['ListDataNik']          = 'C_anomali/ListDataNik';
$route['ListDataNsbhIndividu'] = 'C_anomali/ListDataNsbhIndividu';
$route['ListDataNpwp']         = 'C_anomali/ListDataNpwp';
$route['ListDataUmum']         = 'C_anomali/ListDataUmum';
$route['dataca']               = 'C_anomali/conti';

// Data Excel Export 
$route['export']                = 'C_excel/Lap_anomali_ibu';

//Report LHA
$route['formLHA']              = 'C_lha';

//Report LTLHA
$route['DataLTLHA']            = 'C_ltlha';
$route['save']                 = 'C_ltlha/save';

