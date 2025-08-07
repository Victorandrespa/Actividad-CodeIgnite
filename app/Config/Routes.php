<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Empleados CRUD
$routes->get('verEmpleados', 'EmpleadoController::index');
$routes->get('eliminar_empleado/(:segment)', 'EmpleadoController::eliminar/$1');
$routes->get('update_empleado/(:segment)', 'EmpleadoController::buscar/$1');

$routes->post('agregarEmpleado', 'EmpleadoController::agregarEmpleado');
$routes->post('editar_empleado', 'EmpleadoController::editar/$1');


//Usuario CRUD
$routes->get('verUsuarios', 'UsuarioController::index');
$routes->get('eliminar_usuario/(:segment)', 'UsuarioController::eliminar/$1');
$routes->get('update_usuario/(:segment)', 'UsuarioController::buscar/$1');

$routes->post('agregarUsuario', 'UsuarioController::agregarUsuario');
$routes->post('editar_usuario', 'UsuarioController::editar/$1');


//Equipo CRUD
$routes->get('verEquipo', 'EquipoController::index');
$routes->get('eliminar_equipo/(:segment)', 'EquipoController::eliminar/$1');
$routes->get('update_equipo/(:segment)', 'EquipoController::buscar/$1');

$routes->post('agregarEquipo', 'EquipoController::agregarEquipo');
$routes->post('editar_equipo', 'EquipoController::editar/$1');


//Marcas CRUD
$routes->get('verMarcas', 'MarcasController::index');
$routes->get('eliminar_marca/(:segment)', 'MarcasController::eliminar/$1');
$routes->get('update_marca/(:segment)', 'MarcasController::buscar/$1');

$routes->post('agregarMarca', 'MarcasController::agregarMarca');
$routes->post('editar_marca', 'MarcasController::editar/$1');


//Tipo Equipo CRUD
$routes->get('verTipoEquipo', 'TipoEquipoController::index');
$routes->get('eliminar_tipo_equipo/(:segment)', 'TipoEquipoController::eliminar/$1');
$routes->get('update_tipo_equipo/(:segment)', 'TipoEquipoController::buscar/$1');

$routes->post('agregarTipoEquipo', 'TipoEquipoController::agregarTipoEquipo');
$routes->post('editar_tipo_equipo', 'TipoEquipoController::editar/$1');


//Roles CRUD
$routes->get('verRoles', 'RolesController::index');
$routes->get('eliminar_rol/(:segment)', 'RolesController::eliminar/$1');
$routes->get('update_rol/(:segment)', 'RolesController::buscar/$1');

$routes->post('agregarRol', 'RolesController::agregarRol');
$routes->post('editar_rol', 'RolesController::editar/$1');


//Puesto CRUD
$routes->get('verPuesto', 'PuestoController::index');
$routes->get('eliminar_puesto/(:segment)', 'PuestoController::eliminar/$1');
$routes->get('update_puesto/(:segment)', 'PuestoController::buscar/$1');

$routes->post('agregarPuesto', 'PuestoController::agregarPuesto');
$routes->post('editar_puesto', 'PuestoController::editar/$1');

