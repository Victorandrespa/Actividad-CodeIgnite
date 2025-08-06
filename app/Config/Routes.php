<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Empleados procesos CRUD
$routes->get('verEmpleados', 'EmpleadoController::index');
$routes->get('eliminar_empleado/(:segment)', 'EmpleadoController::eliminar/$1');
$routes->get('update_empleado/(:segment)', 'EmpleadoController::buscar/$1');

$routes->post('agregarEmpleado', 'EmpleadoController::agregarEmpleado');
$routes->post('editar_empleado', 'EmpleadoController::editar/$1');


//Usuario procesos CRUD
$routes->get('verUsuario', 'UsuarioController::index');
$routes->get('eliminar_usuario/(:segment)', 'UsuarioController::eliminar/$1');
$routes->get('update_usuario/(:segment)', 'UsuarioController::buscar/$1');

$routes->post('agregarUsuario', 'UsuarioController::agregarUsuario');
$routes->post('editar_usuario', 'UsuarioController::editar/$1');


//Usuario Equipo CRUD
$routes->get('verEquipo', 'EquipoController::index');
$routes->get('eliminar_equipo/(:segment)', 'EquipoController::eliminar/$1');
$routes->get('update_equipo/(:segment)', 'EquipoController::buscar/$1');

$routes->post('agregarEquipo', 'EquipoController::agregarEquipo');
$routes->post('editar_equipo', 'EquipoController::editar/$1');


