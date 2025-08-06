<?php

namespace App\Controllers;

use App\Models\MarcasModel;

class MarcasController extends BaseController
{
    public function index(): string
    {
        //Crear objeto modelo
        $empleado = new MarcasModel();
        $datos['datos'] = $empleado->findAll();
        return view('marcas', $datos);
    }
    public function agregarMarca()
    {
        //crear un objeto de tipo empleado model
        $empleado = new MarcasModel();
        $datos = [
            'marca_id' => $this->request->getPost('txt_id'),
            'marca' => $this->request->getPost('txt_marca'),
        ];
        $empleado->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $empleado = new MarcasModel();
        $empleado->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verMarcas'));
    }
    public function buscar($id)
    {
        $empleado = new MarcasModel();
        $datos['datos']= $empleado->where(['marca_id' => $id])->first();
        return view('update_marcas', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'marca_id' => $this->request->getPost('txt_id'),
            'marca' => $this->request->getPost('txt_marca'),
        ];
        //print_r($datos);
        $empleado = new MarcasModel();
        $empleado->update($datos['marca_id'],$datos);
        return $this->index();
    }
}
