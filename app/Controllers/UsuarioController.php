<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index(): string
    {
        //Crear objeto modelo
        $empleado = new UsuarioModel();
        $datos['datos'] = $empleado->findAll();
        return view('usuarios', $datos);
    }
    public function agregarUsuario()
    {
        //crear un objeto de tipo empleado model
        $empleado = new UsuarioModel();
        $datos = [
            'usuario_id' => $this->request->getPost('txt_id'),
            'usuario' => $this->request->getPost('txt_usuario'),
            'email' => $this->request->getPost('txt_email'),
            'PASSWORD' => $this->request->getPost('txt_password'),
            'estado' => $this->request->getPost('txt_estado'),
            'rol_id' => $this->request->getPost('txt_rol_id'),

        ];
        $empleado->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $empleado = new UsuarioModel();
        $empleado->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verUsuarios'));
    }
    public function buscar($id)
    {
        $empleado = new UsuarioModel();
        $datos['datos']= $empleado->where(['usuario_id' => $id])->first();
        return view('update_usuario', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'usuario_id' => $this->request->getPost('txt_id'),
            'usuario' => $this->request->getPost('txt_usuario'),
            'email' => $this->request->getPost('txt_email'),
            'PASSWORD' => $this->request->getPost('txt_password'),
            'estado' => $this->request->getPost('txt_estado'),
            'rol_id' => $this->request->getPost('txt_rol_id'),
        ];
        //print_r($datos);
        $empleado = new UsuarioModel();
        $empleado->update($datos['usuario_id'],$datos);
        return $this->index();
    }

}
