<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'tipo',
        'especie',
        'raza',
        'sexo',
        'propietario'
    ];
}
