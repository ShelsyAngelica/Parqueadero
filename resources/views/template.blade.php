<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Parqueadero</title>
</head>
  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('vehicles.index')}}">Lista de vehiculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('vehicles.create')}}">Ingreso de vehiculo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Vehiculos
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{route('type-of-vehicles.index')}}">Tipo de Vehiculos</a></li>
              <li><a href="{{route('type-of-vehicles.create')}}">Nuevo Tipo Veh</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tarifas
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{route('rates.index')}}">Lista de Tarifas</a></li>
              <li><a href="{{route('rates.create')}}">Nuevo Tarifa</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
{{-- <body>
    <a href="{{route('vehicles.index')}}">|Vehiculos|</a>
    <a href="{{route('vehicles.create')}}">|Nuevo Vehiculo|</a>
    <a href="{{route('type-of-vehicles.index')}}">|Tipos de Vehiculos|</a>
    <a href="{{route('type-of-vehicles.create')}}">|Nuevo tipo de Vehiculos|</a>
    <a href="{{route('rates.index')}}">|Tarifas|</a>
    <a href="{{route('rates.create')}}">|Nueva Tarifa|</a> --}}

    @yield('content')
</body>
</html>