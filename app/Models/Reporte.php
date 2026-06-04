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

    // ./vendor/bin/sail artisan make:model Reporte -m
    // "-m" de migrate para la base de datos
    // Definimos los campos que se pueden llenar masivamente.
    // Esto es una medida de seguridad de Laravel para evitar inyecciones de datos no deseados.
    protected $fillable = ['id_usuario','id_imagen','fecha','ubicacion','estado','titulo','descripcion']; 
}
