<?php

namespace App\Controllers;

use App\Models\PuestoModel;

class PuestoController extends BaseController
{
    public function index(): string
    {
        //Crear objeto modelo
        $empleado = new PuestoModel();
        $datos['datos'] = $empleado->findAll();
        return view('puesto', $datos);
    }
    public function agregarPuesto()
    {
        //crear un objeto de tipo empleado model
        $empleado = new PuestoModel();
        $datos = [
            'puesto_id' => $this->request->getPost('txt_id'),
            'puesto' => $this->request->getPost('txt_puesto'),
        ];
        $empleado->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $empleado = new PuestoModel();
        $empleado->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verPuestos'));
    }
    public function buscar($id)
    {
        $empleado = new PuestoModel();
        $datos['datos']= $empleado->where(['puesto_id' => $id])->first();
        return view('update_puesto', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'puesto_id' => $this->request->getPost('txt_id'),
            'puesto' => $this->request->getPost('txt_puesto'),
        ];
        //print_r($datos);
        $empleado = new PuestoModel();
        $empleado->update($datos['puesto_id'],$datos);
        return $this->index();
    }
}
