<?php

namespace App\Controllers;

use App\Models\TipoEquipoModel;

class TipoEquipoController extends BaseController
{
    public function index(): string
    {
        //Crear objeto modelo
        $empleado = new TipoEquipoModel();
        $datos['datos'] = $empleado->findAll();
        return view('tipo_equipo', $datos);
    }
    public function agregarTipoEquipo()
    {
        //crear un objeto de tipo empleado model
        $empleado = new TipoEquipoModel();
        $datos = [
            'tipo_id' => $this->request->getPost('txt_id'),
            'marca' => $this->request->getPost('txt_marca'),
        ];
        $empleado->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $empleado = new TipoEquipoModel();
        $empleado->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verTipoEquipo'));
    }
    public function buscar($id)
    {
        $empleado = new TipoEquipoModel();
        $datos['datos']= $empleado->where(['tipo_id' => $id])->first();
        return view('update_tipo_equipo', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'tipo_id' => $this->request->getPost('txt_id'),
            'marca' => $this->request->getPost('txt_marca'),
        ];
        //print_r($datos);
        $empleado = new TipoEquipoModel();
        $empleado->update($datos['tipo_id'],$datos);
        return $this->index();
    }
}
