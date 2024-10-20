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
            {{ __('Paquetes') }}
        </h2>
    </x-slot>
<div class="container">
    <h1>Lista paquetes turisticos</h1>
     <a href="{{ route('paquete.create')}}" class="btn btn-success">Add </a> 
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Destino</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Duracion</th>
            <th scope="col">Precio</th>
            <th scope="col">Incluye</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($paquetes as $paquete )
          <tr>
            <th scope="row">{{$paquete->id}}</th>
            <td>{{$paquete->destino}}</td>
            <td>{{$paquete->descripcion}}</td>
            <td>{{$paquete->duracion}}</td>
            <td>{{$paquete->precio}}</td>
            <td>{{$paquete->incluye}}</td>
            <td>
              <a href="{{ route('paquetes.edit', ['paquete' => $paquete->id]) }}" class="btn btn-info">Edit</a>
              <form action ="{{route('paquete.destroy',['paquete' => $paquete->id])}}"
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
      
</div>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>