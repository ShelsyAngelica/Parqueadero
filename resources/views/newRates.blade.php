@extends('template')

@section('content')
    <h1>Nueva Tarifa</h1>
    <form action="{{route('rates.store')}}"  method="post">
        @csrf
        <label for="time">Tiempo</label>
        <input type="text" name="time">
        <label for="value">Valor</label>
        <input type="text" name="value">

        <select name="type_vehicle_id" id="">
            @foreach ($typesOfVehicles as $typeOfVehicle)
                <option value="{{$typeOfVehicle->id}}">{{$typeOfVehicle->vehicle}}</option>
            @endforeach
        </select>        
    <button type="submit">Guardar</button>
    </form>
@endsection