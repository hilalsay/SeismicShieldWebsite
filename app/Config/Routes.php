<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/website', 'Website::index');
$routes->get('/about', 'About::index');
$routes->get('/projeler', 'Projeler::index');
$routes->get('/don', 'Don::index');
$routes->get('/da', 'Da::index');
$routes->get('/ds', 'Ds::index');



