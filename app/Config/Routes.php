<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rutas para los contenidos de páginas
$routes->get('quienes-somos', 'Home::quienes_somos');
$routes->get('acerca', 'Home::acercade');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
// Rutas nuevas desplegable
$routes->get('galeria', 'Home::galeria');
$routes->get('eventos', 'Home::eventos');
$routes->get('noticias', 'Home::noticias');