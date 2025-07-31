<?php

namespace App\Controllers;

use App\Models\LibrosModel;

class LibroController extends BaseController
{
    public function index(): string
    {
        $libros = new LibrosModel();
        $datos['datos'] = $libros->findAll();
        return view('libros', $datos);
    }
    public function agregarLibro()
    {
        //crear un objeto de tipo empleado model
        $libros = new LibrosModel();
        $datos = [
            'titulo' => $this->request->getPost('txt_titulo'),
            'autor' => $this->request->getPost('txt_autor'),
            'precio' => $this->request->getPost('txt_precio'),
            'codigo_libro' => $this->request->getPost('txt_codigo_libro'),

        ];
        $libros->insert($datos);
        return $this->index();
    }
    
}

