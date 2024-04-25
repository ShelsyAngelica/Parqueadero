@extends('template')

@section('content')
    <h1>Tarifas</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Tiempo</th>
            <th>Tarifa</th>
            <th>Tipo de vehiculo</th>
        </tr>
        @foreach ($rates as $rate )
        <tr>
            <td>{{$rate->id}}</td>
            <td>{{$rate->time}}</td>
            <td>{{$rate->value}}</td>
            <td>{{$rate->typesOfVehicles->vehicle}}</td>
            <td><a href="{{ route('rates.edit', $rate->id) }}">Editar</a></td>
            <td>
                <form action="{{ route('rates.destroy', $rate->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>           
        </tr>
        @endforeach
    </table>
@endsection