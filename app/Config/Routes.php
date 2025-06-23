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

// Rutas para el controlador de usuario
$routes->post('registrar', 'UsuarioController::registrar');
$routes->post('ingresar', 'UsuarioController::ingresar');
$routes->get('salir', 'UsuarioController::salir');

$routes->get('usuarios', 'UsuarioController::index');
$routes->get('usuario/editar/(:num)', 'UsuarioController::editar/$1');
$routes->post('usuario/actualizar/(:num)', 'UsuarioController::actualizar/$1');
$routes->get('usuario/eliminar/(:num)', 'UsuarioController::eliminar/$1');

// Paneles según perfil
$routes->get('admin', 'AdminController::index');
$routes->get('asociado', 'AsociadoController::index');
