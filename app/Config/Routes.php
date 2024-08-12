<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'berandacontroller::index');
$routes->post('/search_results.php', 'SearchController::handleSearchResults');
//route admin dashboard
$routes ->get ('dashboard', 'Admin\dashboardcontroller::index');
$routes ->get ('beranda', 'User\BerandaController::index');

//route admin login dan logout
$routes->post('login', 'Admin\AdminController::login');
$routes->get('login', 'Admin\AdminController::index');
$routes->get('logout', 'Admin\AdminController::logout');
$routes->get('/admin', 'Admin\AdminController::index');
$routes->add('/admin/login', 'Admin\AdminController::login');
$routes->get('/admin/logout', 'Admin\AdminController::logout');

$routes->post('/kontak/sendEmail', 'KontakController::sendEmail');

//route admin produk
$routes ->get ('daftar-produk', 'admin\produkcontroller::index');
$routes ->get ('daftar-produk/tambah', 'admin\produkcontroller::form_create');
$routes ->post ('daftar-produk/create-produk', 'admin\Produkcontroller::create_produk');
$routes->put('daftar-produk/ubah/(:num)', 'admin\ProdukController::update/$1');
$routes->delete('daftar-produk/hapus/(:num)', 'admin\ProdukController::destroy/$1');

//route admin data hero
$routes ->get ('datahero', 'admin\DataHeroController::index');
$routes ->get ('datahero/tambah', 'admin\DataHeroController::form_create');
$routes ->post ('datahero/create-datahero', 'admin\DataHeroController::create_hero');
$routes->put('datahero/ubah/(:num)', 'admin\DataHeroController::update/$1');
$routes->delete('datahero/hapus/(:num)', 'admin\DataHeroController::destroy/$1');

//route admin data about
$routes ->get ('dataabout', 'admin\DataTentangController::index');
$routes ->get ('dataabout/tambah', 'admin\DataTentangController::form_create');
$routes ->post ('dataabout/create-dataabout', 'admin\DataTentangController::create_dataabout');
$routes->put('dataabout/ubah/(:num)', 'admin\DataTentangController::update/$1');
$routes->delete('dataabout/hapus/(:num)', 'admin\DataTentangController::destroy/$1');

//route admin data admin
$routes->get('dataadmin', 'DataAdminController::index');
$routes ->get ('dataadmin/tambah', 'DataAdminController::form_create');
$routes ->post ('dataadmin/create-dataadmin', 'DataAdminController::create_admin');
$routes->put('dataadmin/ubah/(:num)', 'DataAdminController::update/$1');
$routes->delete('dataadmin/hapus/(:num)', 'DataAdminController::destroy/$1');

//route admin data alamat
$routes ->get ('dataalamat', 'admin\DataAlamatController::index');
$routes ->get ('dataalamat/tambah', 'admin\DataAlamatController::form_create');
$routes ->post ('dataalamat/create-dataalamat', 'admin\DataAlamatController::create_alamat');
$routes->put('dataalamat/ubah/(:num)', 'admin\DataAlamatController::update/$1');
$routes->delete('dataalamat/hapus/(:num)', 'admin\DataAlamatController::destroy/$1');

//route admin data galeri
$routes ->get ('datagaleri', 'admin\DataGaleriController::index');
$routes ->get ('datagaleri/tambah', 'admin\DataGaleriController::form_create');
$routes ->post ('datagaleri/create-datagaleri', 'admin\DataGaleriController::create_galeri');
$routes->delete('datagaleri/hapus/(:num)', 'admin\DataGaleriController::destroy/$1');

//route admin data promosi
$routes ->get ('datapromosi', 'admin\DataPromosiController::index');
$routes ->get ('datapromosi/tambah', 'admin\DataPromosiController::form_create');
$routes ->post ('datapromosi/create-datapromosi', 'admin\DataPromosiController::create_datapromosi');
$routes->put('datapromosi/ubah/(:num)', 'admin\DataPromosiController::update/$1');
$routes->delete('datapromosi/hapus/(:num)', 'admin\DataPromosiController::destroy/$1');

//route admin data kontak
$routes ->get ('datakontak', 'admin\DataKontakController::index');
$routes ->get ('datakontak/tambah', 'admin\DataKontakController::form_create');
$routes ->post ('datakontak/create-datakontak', 'admin\DataKontakController::create_kontak');
$routes->put('datakontak/ubah/(:num)', 'admin\DataKontakController::update/$1');
$routes->delete('datakontak/hapus/(:num)', 'admin\DataKontakController::destroy/$1');

//route admin data status
$routes ->get ('datastatus', 'admin\DataStatusController::index');
$routes ->get ('datastatus/tambah', 'admin\DataStatusController::form_create');
$routes ->post ('datastatus/create-datastatus', 'admin\DataStatusController::create_status');
$routes->put('datastatus/ubah/(:num)', 'admin\DataStatusController::update/$1');
$routes->delete('datastatus/hapus/(:num)', 'admin\DataStatusController::destroy/$1');