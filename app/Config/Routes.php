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
$routes->post('persons/register_form/save', 'Register::save');

// Route pour afficher le formulaire de connexion
$routes->get('login', 'Login::login');

// Route pour traiter la connexion
$routes->post('login/authenticate', 'Login::authenticate');

// Route pour traiter la déconnexion
$routes->post('logout', 'Logout::logout');
// Groupe de routes pour les personnes (contacts)
    $routes->get('liste', 'Personnes::liste'); // Afficher la liste des personnes
    $routes->get('detail/(:num)', 'Personnes::detail/$1'); // Voir les détails d'une personne
    $routes->get('modifier/(:num)', 'Personnes::edit/$1'); // Afficher le formulaire de modification d'une personne
    $routes->post('modifier/(:num)', 'Personnes::update/$1'); // Soumettre le formulaire de modification d'une personne
    $routes->post('supprimer/(:num)', 'Personnes::delete/$1'); // Supprimer une personne
    $routes->get('ajouter', 'Personnes::add'); // Afficher le formulaire d'ajout d'une personne
    $routes->post('ajouter', 'Personnes::save'); // Soumettre le formulaire d'ajout d'une personne;
