@extends('template')

@section('content')
    <h1>Editar Tarifa</h1>
    <form action="{{route('rates.update', $rate->id)}}"  method="post">
        @csrf
        @method('PUT')
        <label for="time">Tiempo</label>
        <input type="text" name="time" value="{{$rate->time}}">
        <label for="value">Valor</label>
        <input type="text" name="value" value="{{$rate->value}}">

        <select name="type_vehicle_id" id="">
            @foreach ($typesOfVehicles as $typeOfVehicle)
                <option value="{{$typeOfVehicle->id}}"{{$typeOfVehicle->id == $rate->type_vehicle_id ? 'selected' : ''}}>{{$typeOfVehicle->vehicle}}</option>
            @endforeach
        </select>        
    <button type="submit">Actualizar</button>
    </form>
@endsection