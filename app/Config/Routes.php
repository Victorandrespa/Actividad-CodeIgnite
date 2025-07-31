<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('verEmpleados', 'EmpleadoController::index');
$routes->post('agregarEmpleado', 'EmpleadoController::agregarEmpleado');

$routes->get('verLibros', 'LibroController::index');
$routes->post('agregarLibro', 'LibroController::agregarLibro');



