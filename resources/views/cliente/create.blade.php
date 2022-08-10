@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Cliente</h1>
    <form action="{{ url('/cliente') }}" method="post">
        @csrf
        @include('cliente.form');
    </form>
</div>
@endsection