<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('verEmpleados', 'EmpleadoController::index');
$routes->get('eliminar_empleado/(:segment)', 'EmpleadoController::eliminar/$1');
$routes->get('update_empleado/(:segment)', 'EmpleadoController::buscar/$1');

$routes->post('agregarEmpleado', 'EmpleadoController::agregarEmpleado');
$routes->post('editar_empleado', 'EmpleadoController::editar/$1');


$routes->get('verLibros', 'LibroController::index');
$routes->post('agregarLibro', 'LibroController::agregarLibro');



