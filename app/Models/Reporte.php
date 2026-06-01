<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    //protected $table = 'reportes';
    protected $primaryKey = 'id_reporte';

    //una funcion  para cada relacion para la relacion eloquente
    //belomngsTo para = perstence a...
    public function usuario() {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function autoridad() {
        return $this->belongsTo(Autoridad::class, 'id_autoridad');
    }

    public function imagen() {
        return $this->belongsTo(Imagen::class, 'id_imagen');
    }
}
