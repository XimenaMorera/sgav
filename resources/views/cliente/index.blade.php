<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cliente') }}
        </h2>
    </x-slot>

<div class="container">
    <h1>Cliente List</h1>
     <a href="{{ route('cliente.create')}}" class="btn btn-success">Add </a> 
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Direccion</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente )
          <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellido}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>
              <a href="{{ route('cliente.edit', ['cliente' => $cliente->id]) }}" class="btn btn-info">Edit</a>
              {{-- <form action ="{{route('cliente.destroy',['cliente' => $clientes->id])}}" --}}
                    {{-- method='POST' style="display: inline-block"> --}}
                    @method('delete')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
                
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
</div>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>