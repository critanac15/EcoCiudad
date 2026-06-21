<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    //declaracion de una variable asignandole el ID de la tabla
    protected $primaryKey = 'id_imagen';
    protected $fillable = ['ruta_imagen'];

    public function reporte() 
    {
        //hasOne relacon de uno a uno
        return $this->hasOne(Reporte::class, 'id_imagen');
    }
}
