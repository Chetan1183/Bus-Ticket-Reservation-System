<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
// $routes->setAutoRoute(true);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// $routes->get('adminlogin', 'AdminController::adminlogin');
$routes->match(['get','post'],'adminlogin', 'AdminController::adminlogin');
$routes->match(['get','post'],'adminregister', 'AdminController::register');
$routes->get('/contact', 'AdminController::contact');
$routes->get('/about', 'AdminController::about');
$routes->get('index', 'AdminController::index');
$routes->get('buscreate', 'AdminController::create');
$routes->post('busstore', 'AdminController::store');
$routes->get('busedit/(:num)', 'AdminController::edit/$1');
$routes->post('busupdate/(:num)', 'AdminController::update/$1');
$routes->get('busdelete/(:num)', 'AdminController::delete/$1');
$routes->get('/admin/bookings', 'AdminController::bookings');



$routes->get('admin_dashboard', 'AdminController::dashboard');

$routes->get('user_dashboard', 'UsersController::user_dashboard',['filter'=>'auth']);
$routes->get('logout', 'UsersController::logout');
$routes->match(['get','post'],'bookbus/(:num)', 'UsersController::bookbus/$1');
$routes->match(['get','post'],'mybookings', 'UsersController::mybookings');
$routes->match(['get','post'],'roomrequest/(:any)', 'UsersController::roomrequest/$1');
$routes->match(['get','post'],'profile', 'UsersController::profile',['filter'=>'auth']);
$routes->match(['get','post'],'userlogin', 'UsersController::userlogin');
$routes->match(['get','post'],'register', 'UsersController::register');




$routes->get('/checkavailability', 'Checkavailability::index');
// $routes->get('/users/register', 'UsersController::register');

// $routes->get('product/(:any)/(:any)', 'Shop::product/$1/$2');
// $routes->get('/', 'Blog::index');
// $routes->get('blog1', 'Blog::blog1');
// $routes->get('blog2', 'Blog::blog2');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
