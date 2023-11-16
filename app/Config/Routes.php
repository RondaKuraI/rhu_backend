<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/getData', 'MainController::getData');

#------------------------------------------------------------#

#For Login

$routes->match(['get', 'post'], 'api/login', 'UserController::login');