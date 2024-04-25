@extends('template')

@section('content')
    <h1>Nuevo tipo de vehiculo</h1>
    <form action="{{route('type-of-vehicles.store')}}"  method="post">
        @csrf
        <label for="vehicle">Nombre del tipo de vehiculo</label>
        <input type="text" name="vehicle">
    <button type="submit">Guardar</button>
    </form>
@endsection 