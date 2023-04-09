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
//VIEW
$routes->get('/', 'Home::index');
$routes->get('/aryanmahasiswa', 'aryanmahasiswa::index');
$routes->get('/aryandosen', 'aryandosen::index');

//UPDATE VIEW
$routes->get('/aryanmahasiswa/update/(:num)','aryanmahasiswa::update/$1');
$routes->get('/aryandosen/update/(:num)','aryandosen::update/$1');
//EDIT
$routes->POST('/aryanmahasiswa/edit', 'aryanmahasiswa::edit/$1');
$routes->POST('/aryandosen/edit', 'aryandosen::edit/$1');
//INSERT VIEW
$routes->add('/aryanmahasiswa/input', 'aryanmahasiswa::input');
$routes->add('/aryandosen/input', 'aryandosen::input');
//INSERT
$routes->post('/aryanmahasiswa/insert', 'aryanmahasiswa::insert');
$routes->post('/aryandosen/insert', 'aryandosen::insert');
//DELET
$routes->add('/aryanmahasiswa/delet/(:num)', 'aryanmahasiswa::delet/$1');
$routes->add('/aryandosen/delet/(:num)', 'aryandosen::delet/$1');
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
