<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('/access-denied', 'ErrorController::accessDenied');

$routes->get('/admin', 'DashboardController::admin', ['filter' => 'auth:admin']);
$routes->get('/user', 'DashboardController::user', ['filter' => 'auth:user']);
