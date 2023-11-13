<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/getData', 'MainController::getData');

#------------------------------------------------------------#

#For Login

$routes->get('/home', 'UsersController::index');