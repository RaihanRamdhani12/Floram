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
$routes->get('/', 'Home::index');

$routes->set404Override(
    function () {
        echo view('404');
    }
);


$routes->get('index', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('blog', 'Home::blog');
$routes->get('admin', 'Home::admin');

$routes->get('input_buah', 'Home::input_buah');
$routes->post('input_buah_proses', 'Home::input_buah_proses');
$routes->get('list_buah', 'Home::list_buah');
$routes->get('hapus_buah/(:any)', 'Home::hapus_buah/$1');

$routes->get('contact', 'Home::contact');
$routes->post('contact_proses', 'Home::contact_proses');
$routes->get('login', 'Home::login');
$routes->post('proses_login', 'Home::proses_login');
$routes->get('logout', 'Home::logout');

$routes->get('fruit', 'Home::fruit');
$routes->get('list_buah', 'Home::list_buah');
$routes->get('editprofil', 'Home::editprofil');

$routes->post('ubah_username_proses', 'Home::ubah_username_proses');
$routes->get('ubah_usaername/(:any)', 'Home::ubha_username/$1');

$routes->get('checkout', 'Home::checkout');
$routes->post('checkout_proses', 'Home::checkout_proses');
$routes->post('index', 'Home::index');

$routes->get('cart', 'RajaOngkir::cart');
$routes->get('cek', 'RajaOngkir::cek');
$routes->post('cek_ongkir', 'RajaOngkir::cek_ongkir');
$routes->post('update', 'RajaOngkir::update');
$routes->get('delete/(:any)', 'RajaOngkir::delete/$1');
$routes->Post('add', 'RajaOngkir::add');
$routes->get('clear', 'RajaOngkir::clear');
$routes->get('bekasi', 'RajaOngkir::bekasi');
$routes->get('getCity', 'RajaOngkir::getCity');
$routes->get('getCost', 'RajaOngkir::getCost');
$routes->get('data_kurir', 'RajaOngkir::data_kurir');


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
