<?php

namespace App\Controllers;

use App\Models\EmpleadoModel;

class EmpleadoController extends BaseController
{
    public function index(): string
    {
        $empleado = new EmpleadoModel();
        $datos['datos'] = $empleado->findAll();
        return view('empleados', $datos);
    }
    public function agregarEmpleado()
    {
        //crear un objeto de tipo empleado model
        $empleado = new EmpleadoModel();
        $datos = [
            'codigo_usuario' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'telefono' => $this->request->getPost('txt_telefono'),

        ];
        $empleado->insert($datos);
        return $this->index();
    }
    
}
