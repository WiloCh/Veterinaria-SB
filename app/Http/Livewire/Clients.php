<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class Clients extends Component
{
    use WithPagination;
    public $accion = 'store';
    public $nombres_cli, $apellidos_cli, $cedula_cli, $telefono_cli, $correo_cli, $direccion_cli, $id_cliente;
    protected $rules = [

        'nombres_cli'  => 'required|string',
        'apellidos_cli' => 'required',
        'cedula_cli'  => 'required',
        'telefono_cli'  => 'required',
        'correo_cli'  => 'required',
        'direccion_cli'  => 'required'
    ];
    protected $messages = [

        'nombres_cli.required'  => 'Los nombres son requeridos ',
        'apellidos_cli.required'  => 'Los apellidos son requerido ',
        'cedula_cli.required'  => 'El número de cédula es requerido ',
        'telefono_cli.required'  => 'El teléfono es requerido',
        'correo_cli.required'  => 'El correo es requerido',
        'direccion_cli.required'  => 'La dirección es requerida '
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        // $pacients = Pacient::orderBy('id', 'desc');
        $clients = Client::all();
        // dd($pacients);
        return view('livewire.clients', compact('clients'));
    }
    public function store()
    {
        $this->accion = "store";
        $this->validate();
        Client::create([
            'nombres_cli' => $this->nombres_cli,
            'apellidos_cli' => $this->apellidos_cli,
            'cedula_cli' => $this->cedula_cli,
            'telefono_cli' => $this->telefono_cli,
            'correo_cli' => $this->correo_cli,
            'direccion_cli' => $this->direccion_cli
        ]);
        $this->reset(['nombres_cli','apellidos_cli','cedula_cli','telefono_cli','correo_cli','direccion_cli','accion']);

    }
    public function edit(Client $client ){
        $this->accion = "update";
        $this->nombres_cli = $client->nombres_cli;
        $this->apellidos_cli = $client->apellidos_cli;
        $this->cedula_cli = $client->cedula_cli;
        $this->telefono_cli = $client->telefono_cli;
        $this->correo_cli = $client->correo_cli;
        $this->direccion_cli = $client->direccion_cli;
        $this->id_cliente = $client->id;
    }
    public function update(){
        $client = Client::find($this->id_cliente);
        $client->update([
            'nombres_cli' => $this->nombres_cli,
            'apellidos_cli' => $this->apellidos_cli,
            'cedula_cli' => $this->cedula_cli,
            'telefono_cli' => $this->telefono_cli,
            'correo_cli' => $this->correo_cli,
            'direccion_cli' => $this->direccion_cli
        ]);
        $this->reset(['nombres_cli','apellidos_cli','cedula_cli','telefono_cli','correo_cli','direccion_cli','accion']);
    }
    public function destroy(Client $client){
        return $client->delete();
    }
    public function default(){

        $this->reset(['nombres_cli','apellidos_cli','cedula_cli','telefono_cli','correo_cli','direccion_cli','accion']);
    }
}
