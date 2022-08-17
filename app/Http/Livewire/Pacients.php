<?php

namespace App\Http\Livewire;

use App\Models\Pacient;
use Livewire\Component;
use Livewire\WithPagination;

class Pacients extends Component
{
    use WithPagination;
    public $accion = 'store';
    public $nombre, $fecha, $tipo, $especie, $raza, $sexo, $propietario , $id_paciente;
    protected $rules = [

        'nombre'  => 'required|string',
        'fecha' => 'required',
        'tipo'  => 'required',
        'especie'  => 'required',
        'raza'  => 'required',
        'sexo'  => 'required',
        'propietario'  => 'required',
    ];
    protected $messages = [

        'nombre.required'  => 'El nombre es requerido ',
        'fecha.required'  => 'La fecha es requerido ',
        'tipo.required'  => 'El tipo es requerido ',
        'especie.required'  => 'La especie es requerida',
        'raza.required'  => 'La raza es requerida',
        'sexo.required'  => 'El sexo es requerido ',
        'propietario.required'  => 'El propietario es requerido '
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        // $pacients = Pacient::orderBy('id', 'desc');
        $pacients = Pacient::all();
        // dd($pacients);
        return view('livewire.pacients', compact('pacients'));
    }
    public function store()
    {
        $this->accion = "store";
        $this->validate();
        Pacient::create([
            'nombre' => $this->nombre,
            'fecha_nacimiento' => $this->fecha,
            'tipo' => $this->tipo,
            'especie' => $this->especie,
            'raza' => $this->raza,
            'sexo' => $this->sexo,
            'propietario' => $this->propietario
        ]);
        $this->reset(['nombre','fecha','tipo','especie','raza','sexo','propietario','accion']);

    }
    public function edit(Pacient $pacient ){
        $this->accion = "update";
        $this->nombre = $pacient->nombre;
        $this->fecha = $pacient->fecha_nacimiento;
        $this->tipo = $pacient->tipo;
        $this->especie = $pacient->especie;
        $this->raza = $pacient->raza;
        $this->sexo = $pacient->sexo;
        $this->propietario = $pacient->propietario;
        $this->id_paciente = $pacient->id;
    }
    public function update(){
        $pacient = Pacient::find($this->id_paciente);
        $pacient->update([
            'nombre' => $this->nombre,
            'fecha_nacimiento' => $this->fecha,
            'tipo' => $this->tipo,
            'especie' => $this->especie,
            'raza' => $this->raza,
            'sexo' => $this->sexo,
            'propietario' => $this->propietario
        ]);
        $this->reset(['nombre','fecha','tipo','especie','raza','sexo','propietario','accion']);
    }
    public function destroy(Pacient $pacient){
        return $pacient->delete();
    }
    public function default(){

        $this->reset(['nombre','fecha','tipo','especie','raza','sexo','propietario','accion']);
    }
}
