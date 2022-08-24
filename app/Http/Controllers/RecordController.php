<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;
class RecordController extends Controller
{
    public function index(){
        return view('pages.record');
    }
    public function generatePDF($id)
    {
        $users = Record::where('id_paciente',$id)->get();

        $data = [
            'title' => 'Bienvenido',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('index', $data);

        return $pdf->download('Veterinaria.pdf');
    }
}
