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
$route['default_controller'] = 'home';
$route['movies']='front/movies';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['bunga-papan/congratulations']='home/product/sub_category/congratulations';
$route['bunga-papan/happy-wedding']='home/product/sub_category/happy-wedding';
$route['bunga-papan/turut-berduka-cita']='home/product/sub_category/turut-berduka-cita';

$route['hand-bouquet']='home/product/category/hand-bouquet';
$route['table-flower']='home/product/category/table-flower';

// $bunga = 'bunga-papan-congratulation-exclusive';
// $route['product/product-detail/'.$bunga]='home/product/product_detail'.$Bunga;

$route['karir-dan-lowongan']='home/page/karir_dan_lowongan';
$route['cara-belanja']='home/page/cara_belanja';
$route['metode-pembayaran']='home/page/metode_pembayaran';
$route['kebijakan-transaksi']='home/page/kebijakan_transaksi';
$route['about']='home/page/about';
$route['hubungi-kami']='home/page/hubungi_kami';
$route['blog']='home/blog';
//$route['']
