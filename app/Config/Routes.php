<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Páginas públicas
$routes->get('quienes-somos', 'Home::quienes_somos');
$routes->get('acerca', 'Home::acercade');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('galeria', 'Home::galeria');
$routes->get('eventos', 'Home::eventos');
$routes->get('noticias', 'Home::noticias');

// Rutas de usuario
$routes->post('registrar', 'UsuarioController::registrar');
$routes->post('ingresar', 'UsuarioController::ingresar');
$routes->get('salir', 'UsuarioController::salir');  // RUTA CORRECTA PARA CERRAR SESION

// CRUD usuarios admin
$routes->get('usuarios', 'UsuarioController::index');
$routes->get('usuario/editar/(:num)', 'UsuarioController::editar/$1');
$routes->post('usuario/actualizar/(:num)', 'UsuarioController::actualizar/$1');
$routes->get('usuario/eliminar/(:num)', 'UsuarioController::eliminar/$1');

// Paneles según perfil
// Paneles según perfil
$routes->get('admin', 'AdminController::index');
$routes->get('asociado', 'AsociadoController::index');

// CRUD de usuarios (solo accesible por admin)
$routes->get('usuarios', 'UsuarioController::index'); // Lista
$routes->get('usuarios/editar/(:num)', 'UsuarioController::editar/$1');
$routes->post('usuarios/actualizar/(:num)', 'UsuarioController::actualizar/$1');
$routes->get('usuarios/eliminar/(:num)', 'UsuarioController::eliminar/$1');

// Registro, login y logout
$routes->post('registro', 'UsuarioController::registrar');
$routes->post('login', 'UsuarioController::ingresar');
$routes->get('logout', 'UsuarioController::salir');
