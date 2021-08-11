<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Login::index');
$routes->get('/profilku', 'Profile::index');
$routes->get('/profilku/update/(:num)', 'Profile::update/$1');

$routes->get('/dashboard', 'Admin::dashboardAdmin');
$routes->get('/listAdmin', 'Admin::admin');
$routes->get('/listPaket', 'Admin::paket');
$routes->get('/tambahPaket', 'Admin::tambahPaket');
$routes->get('/listPerusahaan', 'Admin::perusahaan');
$routes->get('/inputPengiriman/(:num)', 'Admin::inputPengiriman/$1');
$routes->get('/detailPengujian/(:num)', 'Admin::detailPengujian/$1');
$routes->get('/listParameter/(:num)', 'Admin::parameter/$1');

$routes->get('/ujiProfisiensi', 'UjiProfisiensi::index');
$routes->get('/ujiProfisiensi/pilih-baru', 'UjiProfisiensi::pilihBaru');
$routes->get('/ujiProfisiensi/profisiensiBaru/(:num)', 'UjiProfisiensi::profisiensiBaru/$1');

$routes->get('/pengujian', 'UjiProfisiensi::pengujian');
$routes->get('/requestPembayaran', 'UjiProfisiensi::requestPembayaran');

$routes->get('/invoicePembayaran', 'GeneratePdf::invoicePembayaran');
$routes->get('/laporanAkhir', 'GeneratePdf::LaporanAkhir');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
