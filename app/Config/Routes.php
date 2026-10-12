<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/pages', 'Pages::index');
$routes->get('/about', 'Pages::about');

$routes->get('/customer-accounts', 'CustomerAccounts::index');
$routes->get('/user-accounts', 'UserAccounts::index');