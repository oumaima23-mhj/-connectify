<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Route pour la page d'accueil
$routes->get('/', 'Home::index');

// Route pour afficher le formulaire d'inscription
$routes->get('persons/register_form', 'Register::register');

// Route pour traiter l'inscription
$routes->post('register/save', 'Register::save');

// Route pour afficher le formulaire de connexion
$routes->get('login', 'Login::login');

// Route pour traiter la connexion
$routes->post('login/authenticate', 'Login::authenticate');

// Route pour traiter la déconnexion
$routes->get('logout', 'Login::logout');

// Routes pour les personnes
$routes->get('personnes/liste', 'Personnes::liste');
$routes->get('personnes/ajouter', 'Personnes::ajouter');
$routes->post('personnes/store', 'Personnes::store');
$routes->get('personnes/modifier/(:num)', 'Personnes::modifier/$1');
$routes->post('personnes/update/(:num)', 'Personnes::update/$1');
$routes->get('personnes/detail/(:num)', 'Personnes::detail/$1');
$routes->get('personnes/supprimer/(:num)', 'Personnes::supprimer/$1');
$routes->get('personnes/confirmer_suppression/(:num)', 'Personnes::confirmer_suppression/$1');
