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
            'empleado_id' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'puesto_id' => $this->request->getPost('txt_puesto_id'),
            'fecha_nacimiento' => $this->request->getPost('txt_f_nacimiento'),

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
        $datos['datos']= $empleado->where(['empleado_id' => $id])->first();
        return view('update_empleado', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'empleado_id' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'puesto_id' => $this->request->getPost('txt_puesto_id'),
            'fecha_nacimiento' => $this->request->getPost('txt_f_nacimiento'),
        ];
        //print_r($datos);
        $empleado = new EmpleadoModel();
        $empleado->update($datos['empleado_id'],$datos);
        return $this->index();
    }

}
