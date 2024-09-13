<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin::dashboard',['as'=>'Dashboard']);
// --------------------------------------------------------
// ----------------------Login-----------------------------
// --------------------------------------------------------
$routes->get('login', 'Login::index',['as'=>'login']);
$routes->post('autenticacao', 'Login::verificarLogin',['as'=>'autenticacao']);
// --------------------------------------------------------
