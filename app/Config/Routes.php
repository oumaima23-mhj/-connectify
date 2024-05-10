<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('register', 'Register::register');
$routes->get('login', 'Login::login');

$routes->group('personnes', function ($routes) {
    $routes->get('oumaima', 'Personnes::oumaima');
});

