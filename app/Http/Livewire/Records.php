<?php

namespace App\Http\Livewire;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecordController;
use App\Models\Record;
use App\Models\Pacient;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use PDF;
use Ramsey\Uuid\Type\Integer;

class Records extends Component
{
    use WithPagination;
    public $accion = 'store';
    public $flag = false;
    public $record = array() ,$nombre_paciente;
    public $peso_paciente, $edad_paciente, $fecha_visita, $fecha_vacuna, $codigo_vacuna, $nombre_vacuna, $fecha_medicamento, $nombre_medicamento, $sintomas, $diagnostico, $examenes, $receta, $fecha_siguiente_visita, $id_paciente;
    protected $rules = [

        'peso_paciente'  => 'required',
        'edad_paciente' => 'required',
        'fecha_visita'  => 'required',
        'sintomas'  => 'required',
        'diagnostico'  => 'required',
        'examenes'  => 'required',
        'receta'  => 'required',
        'id_paciente' => 'required',
    ];
    protected $messages = [

        'peso_paciente'  => 'Dato requerido',
        'edad_paciente' => 'Dato requerido',
        'fecha_visita'  => 'Dato requerido',
        'sintomas'  => 'Dato requerido',
        'diagnostico'  => 'Dato requerido',
        'examenes'  => 'Dato requerido',
        'receta'  => 'Dato requerido',
        'id_paciente' => 'Paciente Requerido',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        // $pacients = Pacient::orderBy('id', 'desc');
        if ($this->flag) {
            $re = $this->record;
            return view('livewire.records', compact('re'));

        } else {
            $records = Record::all();
            $pacients = Pacient::all();

            return view('livewire.records', compact('records', 'pacients'));
        }
    }
    public function shareData($pa){
        return
        redirect()->action([RecordController::class , 'generatePDF'],['id'=>$pa]);
    }
    public function generatePDF(Request $request)
    {
        $users = User::where('id_paciente',$request->id_paciente)->get();

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('index', $data);

        return $pdf->download('itsolutionstuff.pdf');
    }

    public function downloadPdf(){

        // $this->nombre_paciente = 'alex';

        // $re = $this->record;
        // view()->share('re',$re);

        // $pdf = PDF::loadView('index',compact('re'));
        // $this->nombre_paciente = 'alex';


        // return $pdf->download('pdf_file.pdf');$users = User::get();
        $users = User::get();

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('index', $data);

        return $pdf->download('itsolutionstuff.pdf');


    }

    public function store()
    {
        $this->accion = "store";
        $this->validate();
        Record::create([
            'id_paciente' => $this->id_paciente,
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
        $this->reset(['id_paciente', 'peso_paciente', 'edad_paciente', 'fecha_visita', 'fecha_vacuna', 'codigo_vacuna', 'nombre_vacuna', 'fecha_medicamento', 'nombre_medicamento', 'sintomas', 'diagnostico', 'examenes', 'receta', 'fecha_siguiente_visita']);
    }
    public function edit(Record $record)
    {
        $this->accion = "update";
        $this->id_paciente = $record->id_paciente;
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
    public function update()
    {
        $record = Record::find($this->id_ficha);
        $record->update([
            'id_paciente' => $this->id_paciente,
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
        $this->reset(['id_paciente', 'peso_paciente', 'edad_paciente', 'fecha_visita', 'fecha_vacuna', 'codigo_vacuna', 'nombre_vacuna', 'fecha_medicamento', 'nombre_medicamento', 'sintomas', 'diagnostico', 'examenes', 'receta', 'fecha_siguiente_visita']);
    }
    public function destroy(Record $record)
    {
        return $record->delete();
    }
    public function default()
    {

        $this->reset(['id_paciente', 'peso_paciente', 'edad_paciente', 'fecha_visita', 'fecha_vacuna', 'codigo_vacuna', 'nombre_vacuna', 'fecha_medicamento', 'nombre_medicamento', 'sintomas', 'diagnostico', 'examenes', 'receta', 'fecha_siguiente_visita']);
    }
}
