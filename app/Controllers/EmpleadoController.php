<?php

namespace App\Controllers;

use App\Models\EmpleadoModel;

class EmpleadoController extends BaseController
{
    public function index(): string
    {
        //Crear objeto modelo
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
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $empleado = new EmpleadoModel();
        $empleado->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verEmpleados'));
    }
    public function buscar($id)
    {
        $empleado = new EmpleadoModel();
        $datos['datos']= $empleado->where(['codigo_usuario' => $id])->first();
        return view('update_empleado', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'codigo_usuario' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'telefono' => $this->request->getPost('txt_telefono'),
        ];
        //print_r($datos);
        $empleado = new EmpleadoModel();
        $empleado->update($datos['codigo_usuario'],$datos);
        return $this->index();
    }

}
