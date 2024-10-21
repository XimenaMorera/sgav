<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Reservas List</title>
</head>
<body>
  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservas') }}
        </h2>
    </x-slot>
<div class="container">
    <h1>Reserva List</h1>
    <a href="{{ route('reserva.create')}}" class="btn btn-success">Add </a> 
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Cliente ID</th>
            <th scope="col">Paquete ID</th>
            <th scope="col">Fecha de Reserva</th>
            <th scope="col">Fecha de Salida</th>
            <th scope="col">Cantidad de Personas</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva )
          <tr>
            <th scope="row">{{$reserva->id}}</th>
            <td>{{$reserva->cliente_id}}</td>
            <td>{{$reserva->paquete_id}}</td>
            <td>{{$reserva->fecha_reserva}}</td>
            <td>{{$reserva->fecha_salida}}</td>
            <td>{{$reserva->cantidad_personas}}</td>
            <td>
              <a href="{{ route('reserva.edit', ['reserva' => $reserva->id]) }}" class="btn btn-info">Edit</a>
              <form action ="{{ route('reserva.destroy', ['reserva' => $reserva->id]) }}" 
                    method='POST' style="display: inline-block">
                    @method('delete')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Delete">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <x-app-layout>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>
