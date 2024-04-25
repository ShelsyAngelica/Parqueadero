@extends('template')

@section('content')
    <h1>Editar tipo de vehiculo</h1>
    <form action="{{route('type-of-vehicles.update', $typeOfVehicle->id)}}"  method="post">
        @csrf
        @method('PUT')
        <label for="vehicle">Nombre del tipo de vehiculo</label>
        <input type="text" name="vehicle" value="{{$typeOfVehicle->vehicle}}">
    <button type="submit">Guardar</button>
    </form>
@endsection 