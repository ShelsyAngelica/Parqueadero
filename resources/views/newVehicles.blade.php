@extends('template')

@section('content')
    <h1>Nuevo Vehiculo</h1>

    <form action="{{route('vehicles.store')}}"  method="post">
        @csrf
        <label for="">Placa</label>
        <input type="text" name="car_plate">

        <select name="type_vehicle_id" id="">
            @foreach ($typesOfVehicles as $typeOfVehicle)
                <option value="{{$typeOfVehicle->id}}">{{$typeOfVehicle->vehicle}}</option>
            @endforeach
        </select>
               
    <button type="submit">Guardar</button>
    </form>
@endsection