<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table         = 'usuarios'; 
    protected $primaryKey         = 'usuario_id'; 
    protected $allowedFields = [
        'usuario_id','usuario','email','PASSWORD','estado','rol_id',
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}