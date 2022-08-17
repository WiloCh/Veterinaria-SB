<?php

namespace App\Http\Livewire;

use App\Models\Record;
use Livewire\Component;
use Livewire\WithPagination;

class Records extends Component
{
    use WithPagination;
    public $accion = 'store';
    public $peso_paciente, $edad_paciente, $fecha_visita, $fecha_vacuna, $codigo_vacuna, $nombre_vacuna, $fecha_medicamento, $nombre_medicamento, $sintomas, $diagnostico, $examenes, $receta, $fecha_siguiente_visita;
    protected $rules = [

        'peso_paciente'  => 'required',
        'edad_paciente' => 'required',
        'fecha_visita'  => 'required',
        'sintomas'  => 'required',
        'diagnostico'  => 'required',
        'examenes'  => 'required',
        'receta'  => 'required',
    ];
    protected $messages = [

        'peso_paciente'  => 'Dato requerido',
        'edad_paciente' => 'Dato requerido',
        'fecha_visita'  => 'Dato requerido',
        'sintomas'  => 'Dato requerido',
        'diagnostico'  => 'Dato requerido',
        'examenes'  => 'Dato requerido',
        'receta'  => 'Dato requerido'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        // $pacients = Pacient::orderBy('id', 'desc');
        $records = Record::all();
        // dd($pacients);
        return view('livewire.records', compact('records'));
    }
    public function store()
    {
        $this->accion = "store";
        $this->validate();
        Record::create([
            'peso_paciente' => $this->peso_paciente,
            'edad_paciente' => $this->edad_paciente,
            'fecha_visita' => $this->fecha_visita,
            'fecha_vacuna' => $this->fecha_vacuna,
            'codigo_vacuna' => $this->codigo_vacuna,
            'nombre_vacuna' => $this->nombre_vacuna,
            'fecha_medicamento' => $this->fecha_medicamento,
            'nombre_medicamento' => $this->nombre_medicamento,
            'sintomas' => $this->sintomas,
            'diagnostico' => $this->diagnostico,
            'examenes' => $this->examenes,
            'receta' => $this->receta,
            'fecha_siguiente_visita' => $this->fecha_siguiente_visita
        ]);
        $this->reset(['peso_paciente', 'edad_paciente', 'fecha_visita', 'fecha_vacuna', 'codigo_vacuna', 'nombre_vacuna', 'fecha_medicamento', 'nombre_medicamento', 'sintomas', 'diagnostico', 'examenes', 'receta', 'fecha_siguiente_visita']);

    }
    public function edit(Record $record ){
        $this->accion = "update";
        $this->peso_paciente = $record->peso_paciente;
        $this->edad_paciente = $record->edad_paciente;
        $this->fecha_visita = $record->fecha_visita;
        $this->fecha_vacuna = $record->fecha_vacuna;
        $this->codigo_vacuna = $record->codigo_vacuna;
        $this->nombre_vacuna = $record->nombre_vacuna;
        $this->fecha_medicamento = $record->fecha_medicamento;
        $this->nombre_medicamento = $record->nombre_medicamento;
        $this->sintomas = $record->sintomas;
        $this->diagnostico = $record->diagnostico;
        $this->examenes = $record->examenes;
        $this->receta = $record->receta;
        $this->fecha_siguiente_visita = $record->fecha_siguiente_visita;
        $this->id_ficha = $record->id;
    }
    public function update(){
        $record = Record::find($this->id_ficha);
        $record->update([
            'peso_paciente' => $this->peso_paciente,
            'edad_paciente' => $this->edad_paciente,
            'fecha_visita' => $this->fecha_visita,
            'fecha_vacuna' => $this->fecha_vacuna,
            'codigo_vacuna' => $this->codigo_vacuna,
            'nombre_vacuna' => $this->nombre_vacuna,
            'fecha_medicamento' => $this->fecha_medicamento,
            'nombre_medicamento' => $this->nombre_medicamento,
            'sintomas' => $this->sintomas,
            'diagnostico' => $this->diagnostico,
            'examenes' => $this->examenes,
            'receta' => $this->receta,
            'fecha_siguiente_visita' => $this->fecha_siguiente_visita
        ]);
        $this->reset(['peso_paciente', 'edad_paciente', 'fecha_visita', 'fecha_vacuna', 'codigo_vacuna', 'nombre_vacuna', 'fecha_medicamento', 'nombre_medicamento', 'sintomas', 'diagnostico', 'examenes', 'receta', 'fecha_siguiente_visita']);
    }
    public function destroy(Record $record){
        return $record->delete();
    }
    public function default(){

        $this->reset(['peso_paciente', 'edad_paciente', 'fecha_visita', 'fecha_vacuna', 'codigo_vacuna', 'nombre_vacuna', 'fecha_medicamento', 'nombre_medicamento', 'sintomas', 'diagnostico', 'examenes', 'receta', 'fecha_siguiente_visita']);
    }
}
