<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'tipo',
        'especie',
        'raza',
        'sexo',
        'propietario',
        'id_paciente',
        'id'
    ];

    public function records()
    {
        return $this->hasMany('App\Models\Record', 'id_paciente', 'id');
    }
}
