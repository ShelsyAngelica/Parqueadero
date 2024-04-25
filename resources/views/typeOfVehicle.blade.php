@extends('template')

@section('content')
    <h1>Tipos de Vehiculos</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Tipo</th>
        </tr>
        @foreach ($typesOfVehicles as $typeOfVehicle )
        <tr>
            <td>{{$typeOfVehicle->id}}</td>
            <td>{{$typeOfVehicle->vehicle}}</td>
            <td><a href="{{ route('type-of-vehicles.edit', $typeOfVehicle->id) }}">Editar</a></td>
            <td>
                <form action="{{ route('type-of-vehicles.destroy', $typeOfVehicle->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>           
        </tr>
        @endforeach
    </table>
@endsection