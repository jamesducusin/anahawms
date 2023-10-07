<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');


//Hotel & Restaurant
$routes->match(['get', 'post'], '/', 'HotelGuest::index');
$routes->match(['get', 'post'], '/hotel/listing', 'HotelGuest::listing');
$routes->match(['get', 'post'], '/hotel/booking/(:any)', 'HotelGuest::booking/$1');
$routes->match(['get', 'post'], '/hotel/details/(:any)', 'HotelGuest::detail/$1');
$routes->match(['get', 'post'], '/hotel/dashboard', 'HotelGuest::dashboard');
$routes->match(['get', 'post'], '/commingsoon', 'HotelGuest::commingsoon');


//Admin
$routes->match(['get', 'post'], '/admin/room/type', 'HotelAdmin::room_type');
$routes->match(['get', 'post'], '/admin/booking', 'HotelAdmin::booking');
$routes->match(['get', 'post'], '/admin/dashboard', 'HotelAdmin::dashboard');
$routes->match(['get', 'post'], '/admin/room', 'HotelAdmin::room');
$routes->match(['get', 'post'], '/admin/price/manager', 'HotelAdmin::price_manager');
$routes->match(['get', 'post'], '/admin/service', 'HotelAdmin::service');
$routes->match(['get', 'post'], '/admin/amenity', 'HotelAdmin::amenity');
$routes->match(['get', 'post'], '/admin/housekeeping', 'HotelAdmin::housekeeping');
$routes->match(['get', 'post'], '/admin/guest', 'HotelAdmin::guest');
$routes->match(['get', 'post'], '/admin/walkthrough', 'HotelAdmin::walkthrough');