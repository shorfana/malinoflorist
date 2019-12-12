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

//$this->load->helper('navbar');

$route['default_controller'] = 'home';
$route['movies']='front/movies';
$route['404_override'] = 'home/error_404';
$route['translate_uri_dashes'] = FALSE;

require_once( BASEPATH .'database/DB'. EXT );
  $db =& DB();

$query = $db->query( "SELECT sub_category.*, `category`.`slug` AS cat_slug FROM sub_category,`category` WHERE `sub_category`.`category_id`=`category`.`id`" );
$result = $query->result();
foreach( $result as $row )
{
    $route[ $row->cat_slug.'/'.$row->slug ]                 = "home/product/sub_category/".$row->slug;
    $route[ $row->cat_slug.'/'.$row->slug.'/:any' ]         = $row->slug;
    $route[ $row->cat_slug ]           = 'error404';
    $route[ $row->cat_slug.'/:any' ]   = 'error404';
}

// foreach( $result2 as $row )
// {
//     $route[ $row->slug ]                 = "home/product/sub_category/".$row->slug;
//     $route[ $row->slug.'/:any' ]         = $row->name;
//     $route[ $row->name ]           = 'error404';
//     $route[ $row->name.'/:any' ]   = 'error404';
// }

// $route['bunga-papan/congratulations']='home/product/sub_category/congratulations';
// $route['bunga-papan/happy-wedding']='home/product/sub_category/happy-wedding';
// $route['bunga-papan/turut-berduka-cita']='home/product/sub_category/turut-berduka-cita';
//
// $route['hand-bouquet']='home/product/category/hand-bouquet';
// $route['table-flower']='home/product/category/table-flower';

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
