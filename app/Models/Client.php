<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres_cli',
        'apellidos_cli',
        'cedula_cli',
        'telefono_cli',
        'correo_cli',
        'direccion_cli'
    ];
}
