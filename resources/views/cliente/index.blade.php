@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif

<a class="btn btn-success" href="{{ url('cliente/create') }}" role="button">Registrar nuevo cliente</a>
<table class="table table-light">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $clientes as $cliente )
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombres_cli }}</td>
            <td>{{ $cliente->apellidos_cli }}</td>
            <td>{{ $cliente->cedula_cli }}</td>
            <td>{{ $cliente->telefono_cli }}</td>
            <td>{{ $cliente->correo_cli }}</td>
            <td>{{ $cliente->direccion_cli }}</td>
            <td>
                <a class="btn btn-primary" href="{{ url('/cliente/'.$cliente->id.'/edit') }}">
                    Editar 
                </a>
                <form action="{{ url('/cliente/'.$cliente->id ) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Eliminar este Cliente?')" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection