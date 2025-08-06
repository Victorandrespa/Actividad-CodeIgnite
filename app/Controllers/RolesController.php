<?php

namespace App\Controllers;

use App\Models\RolesModel;

class RolesController extends BaseController
{
    public function index(): string
    {
        //Crear objeto modelo
        $empleado = new RolesModel();
        $datos['datos'] = $empleado->findAll();
        return view('roles', $datos);
    }
    public function agregarRol()
    {
        //crear un objeto de tipo empleado model
        $empleado = new RolesModel();
        $datos = [
            'rol_id' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'descripcion' => $this->request->getPost('txt_descripcion'),
        ];
        $empleado->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $empleado = new RolesModel();
        $empleado->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verRoles'));
    }
    public function buscar($id)
    {
        $empleado = new RolesModel();
        $datos['datos']= $empleado->where(['rol_id' => $id])->first();
        return view('update_rol', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'rol_id' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'descripcion' => $this->request->getPost('txt_descripcion'),
        ];
        //print_r($datos);
        $empleado = new RolesModel();
        $empleado->update($datos['rol_id'],$datos);
        return $this->index();
    }
}
