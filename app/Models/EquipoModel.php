<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipoModel extends Model
{
    protected $table         = 'equipos'; 
    protected $primaryKey         = 'equipo_id'; 
    protected $allowedFields = [
        'equipo_id','no_serie','marca_id','descripcion','fecha_compra','precio', 'tipo_equipo','empleado_id',
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}