<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'peso_paciente',
        'edad_paciente',
        'fecha_visita',
        'fecha_vacuna',
        'codigo_vacuna',
        'nombre_vacuna',
        'fecha_medicamento',
        'nombre_medicamento',
        'sintomas',
        'diagnostico',
        'examenes',
        'receta',
        'fecha_siguiente_visita',
        'id_paciente',
        'id'
    ];

    public function pacient()
    {
        return $this->belongsTo('App\Models\Pacient', 'id_paciente', 'id');
    }
}
