<h1>Ticket de pago</h1>
<h2>Parqueadero JH</h2>
<p>Bogota</p><br>
{{$datos->departure_date}}
<table>
    <tr>
        <th>Placa</th>
        <th>Tipo de vehiculo</th>
        <th>Hora Ingreso</th>
        <th>Hora Salida</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>{{$datos->car_plate}}</td>
        
        <td>{{$datos->typesOfVehicles->vehicle}}</td>
        <td>{{$datos->entry_date}}</td>
        <td>{{$datos->departure_date}}</td>
        <td>{{$datos->value}}</td>
    </tr>    
</table>
