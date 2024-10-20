<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Clientes</title>
</head>
<body>
<div class="container">
    <h1>Add Clientes</h1>
    <form method="POST" action="{{route('cliente.store')}}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="email" class="form-control" id="id" aria-describedby="idHelp" 
          name="id" disabled="disabled">
          <div id="idHelp" class="form-text">Cliente Code</div>
        </div>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" aria-describedby="nameHelp"
          name="nombre" placeholder="Nombre.">
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="apellido" aria-describedby="nameHelp"
          name="apellido" placeholder="Apellido.">
        </div>
        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="text" class="form-control" id="telefono" aria-describedby="nameHelp"
          name="telefono" placeholder="Telefono.">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" aria-describedby="nameHelp"
          name="email" placeholder="Email.">
        </div>
        <div class="mb-3">
          <label for="direccion" class="form-label">Direccion</label>
          <input type="text" class="form-control" id="direccion" aria-describedby="nameHelp"
          name="direccion" placeholder="Direccion.">
        </div>
        
        <div class="mt-3">
        <button type="submit" class="btn btn-primary">save</button>
        <a href="submit" class="btn btn-primary" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
</body>
</html>