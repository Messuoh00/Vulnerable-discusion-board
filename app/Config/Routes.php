<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
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

// UserController Actions
$routes->get('/', 'Home::index', ['filter' => 'in']);
$routes->get('/contact_us', 'Home::contact_us', ['filter' => 'in']);

$routes->get('/login', 'UserController::loginIndex',['filter'=>'in']);
$routes->post('/login', 'UserController::login',['filter'=>'in']);

$routes->get('/register', 'UserController::registerIndex', ['filter' => 'in']);
$routes->post('/register', 'UserController::register', ['filter' => 'in']);

$routes->get('/logout', 'UserController::logout', ['filter' => 'auth']);

$routes->get('/profile/(:segment)', 'UserController::profile/$1', ['filter' => 'in']);
//$routes->post('profile/(:segment)/update', 'UserController::update/$1', ['filter' => 'auth']); // Add this line.
//$routes->post('profile/(:segment)/update_profile_picture', 'UserController::update_profile_picture/$1', ['filter' => 'auth']); // Add this line.


$routes->get('/forums', 'ForumsController::index',['filter'=>'in']);
$routes->get('/forums/(:num)', 'ForumsController::post/$1', ['filter' => 'in']);
$routes->post('/forums/(:num)/comment', 'ForumsController::comment/$1', ['filter' => 'auth']);

$routes->get('/forums/create', 'ForumsController::createIndex', ['filter' => 'in']);
$routes->post('/forums/create', 'ForumsController::create', ['filter' => 'in']);


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
