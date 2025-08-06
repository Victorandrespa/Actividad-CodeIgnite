<?php

namespace App\Controllers;

use App\Models\EquipoModel;

class EquipoController extends BaseController
{
    public function index(): string
    {
        //Crear objeto modelo
        $empleado = new EquipoModel();
        $datos['datos'] = $empleado->findAll();
        return view('equipos', $datos);
    }
    public function agregarEquipo()
    {
        //crear un objeto de tipo empleado model
        $empleado = new EquipoModel();
        $datos = [
            'equipo_id' => $this->request->getPost('txt_id'),
            'no_serie' => $this->request->getPost('txt_serie'),
            'marca_id' => $this->request->getPost('txt_marca_id'),
            'descripcion' => $this->request->getPost('txt_descripcion'),
            'fecha_compra' => $this->request->getPost('txt_fecha_compra'),
            'precio' => $this->request->getPost('txt_precio'),
            'tipo_equipo' => $this->request->getPost('txt_tipo_equipo'),
            'empleado_id' => $this->request->getPost('txt_empleado_id'),
        ];
        $empleado->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $empleado = new EquipoModel();
        $empleado->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verEquipo'));
    }
    public function buscar($id)
    {
        $empleado = new EquipoModel();
        $datos['datos']= $empleado->where(['equipo_id' => $id])->first();
        return view('update_equipo', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'equipo_id' => $this->request->getPost('txt_id'),
            'no_serie' => $this->request->getPost('txt_no_serie'),
            'marca_id' => $this->request->getPost('txt_marca_id'),
            'descripcion' => $this->request->getPost('txt_descripcion'),
            'fecha_compra' => $this->request->getPost('txt_fecha_compra'),
            'precio' => $this->request->getPost('txt_precio'),
            'tipo_equipo' => $this->request->getPost('txt_tipo_equipo'),
            'empleado_id' => $this->request->getPost('txt_empleado_id'),

        ];
        //print_r($datos);
        $empleado = new EquipoModel();
        $empleado->update($datos['equipo_id'],$datos);
        return $this->index();
    }
}
