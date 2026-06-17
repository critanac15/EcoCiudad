<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autoridad extends Model
{
    //Declaracion de variables con protected para que esten protegidas
    protected $table = 'autoridades';
    protected $primaryKey = 'id_autoridad';

    //funcion para la relacion en forma eloquentt
    //has many= tiene muchos, relacion de 1 a  N
    public function reportes() 
    {
        return $this->hasMany(Reporte::class, 'id_autoridad');
    }
}
