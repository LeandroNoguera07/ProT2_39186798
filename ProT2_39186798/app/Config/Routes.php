<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::inicio');
$routes->get('quienessomos', 'Home::quienessomos');
$routes->get('acercade', 'Home::acercade');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('login', 'Home::login');