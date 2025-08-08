<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoEquipoModel extends Model
{
    protected $table         = 'tipo_equipo'; 
    protected $primaryKey         = 'tipo_id'; 
    protected $allowedFields = [
        'tipo_id','marca', 
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}