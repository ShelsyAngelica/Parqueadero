@extends('template')

@section('content')
    <h1>Vehiculos</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Placa</th>
            <th>Tipo de vehiculo</th>
        </tr>
        @foreach ($vehicles as $vehicle )
        <tr>
            <td>{{$vehicle->id}}</td>
            <td>{{$vehicle->car_plate}}</td>
            <td>{{$vehicle->typesOfVehicles->vehicle}}</td>

            @if ($vehicle->value)
                <td>Pagado</td>
                <td><a href="{{ route('pdf', $vehicle->id)  }}"><button>Imprimir</button></a></td>
            @else 
                <td><a href="{{ route('vehicles.edit', $vehicle->id)  }}">Pagar</a></td>
            @endif
            
        </tr>
        @endforeach
    </table>
@endsection