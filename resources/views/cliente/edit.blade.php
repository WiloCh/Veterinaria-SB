@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>
    <form action="{{ url('/cliente/'.$cliente->id) }}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        @include('cliente.form');
    </form>
</div>
@endsection