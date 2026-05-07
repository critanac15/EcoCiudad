<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    // Definimos los campos que se pueden llenar masivamente.
    // Esto es una medida de seguridad de Laravel para evitar inyecciones de datos no deseados.
    protected $fillable = ['username', 'comment', 'report_date', 'image_path'];
}