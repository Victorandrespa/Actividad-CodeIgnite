<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadoModel extends Model
{
    protected $table         = 'usuarios'; 
    protected $primaryKey         = 'codigo_usuario'; 
    protected $allowedFields = [
        'codigo_usuario', 'nombre', 'apellido', 'telefono',
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}