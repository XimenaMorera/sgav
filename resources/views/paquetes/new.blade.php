<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Paquetes</title>
</head>
<body>
<div class="container">
    <h1>Add Paquetes</h1>
    <form method="POST" action="{{route('paquete.store')}}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="email" class="form-control" id="id" aria-describedby="idHelp" 
          name="id" disabled="disabled">
          <div id="idHelp" class="form-text">Paquete Code</div>
        </div>
        <div class="mb-3">
          <label for="Destino" class="form-label">Destino</label>
          <input type="text" class="form-control" id="destino" aria-describedby="nameHelp"
          name="destino" placeholder="Destino.">
        </div>
        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input type="text" class="form-control" id="descripcion" aria-describedby="nameHelp"
          name="descripcion" placeholder="descripcion.">
        </div>
        <div class="mb-3">
          <label for="duracion" class="form-label">Duracion</label>
          <input type="text" class="form-control" id="duracion" aria-describedby="nameHelp"
          name="duracion" placeholder="Duracion.">
        </div>
        <div class="mb-3">
          <label for="precio" class="form-label">Precio</label>
          <input type="text" class="form-control" id="precio" aria-describedby="nameHelp"
          name="precio" placeholder="Precio.">
        </div>
        <div class="mb-3">
          <label for="incluye" class="form-label">Incluye</label>
          <input type="text" class="form-control" id="incluye" aria-describedby="nameHelp"
          name="incluye" placeholder="Incluye.">
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