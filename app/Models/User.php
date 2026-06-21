<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    // Se reemplazó la sintaxis de atributos de PHP 8 (#[Fillable(...)]) por la propiedad 
    // protegida tradicional de Eloquent. Laravel nativo requiere declarar $fillable como 
    // un array para prevenir vulnerabilidades de asignación masiva al crear usuarios.
    protected $fillable = ['name', 'email', 'password',];

    protected $hidden = ['password', 'remember_token',];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    //declaracion de variables con protected para que eten protegidAS
    protected $table = 'users';
    protected $primaryKey = 'id_usuario';

    //funcion para la relacion eloquente
    //has many= relacion de 1 a N
    public function reportes() 
    {
        return $this->hasMany(Reporte::class, 'id_usuario');
    }
}
