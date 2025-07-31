<?php

namespace App\Models;

use CodeIgniter\Model;

class LibrosModel extends Model
{
    protected $table         = 'libros'; 
    protected $primaryKey         = 'codigo_libro'; 
    protected $allowedFields = [
        'titulo', 'autor', 'precio', 'codigo_libro',
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}