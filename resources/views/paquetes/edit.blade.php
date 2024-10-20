<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Paquetes</title>
</head>
<body>
<div class="container">
    <h1>Editar Paquetess</h1>
    <form method="POST" action="{{ route('paquete.update', ['paquete' => $paquete->id]) }}">
      @method('put')
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="email" class="form-control" id="id" aria-describedby="idHelp" 
          name="id" disabled="disabled" value="{{ $paquete->id }}">
          <div id="idHelp" class="form-text">Paquete Code</div>
        </div>
        <div class="mb-3">
          <label for="destino" class="form-label">Destino</label>
          <input type="text" class="form-control" id="destino" aria-describedby="nameHelp"
          name="destino" placeholder="Destino." value="{{ $paquete->destino }}">
        </div>
        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input type="text" class="form-control" id="apellido" aria-describedby="nameHelp"
          name="descripcion" placeholder="descripcion."value="{{ $paquete->descripcion }}">
        </div>
        <div class="mb-3">
          <label for="duracion" class="form-label">Duracion</label>
          <input type="text" class="form-control" id="telefono" aria-describedby="nameHelp"
          name="duracion" placeholder="Duracion." value="{{ $paquete->duracion }}">
        </div>
        <div class="mb-3">
          <label for="precio" class="form-label">Precio</label>
          <input type="text" class="form-control" id="email" 
          name="precio" placeholder="Precio." value="{{ $paquete->precio }}">
        </div>
        <div class="mb-3">
          <label for="incluye" class="form-label">Incluye</label>
          <input type="text" class="form-control" id="incluye" aria-describedby="nameHelp"
          name="incluye" placeholder="Incluye." value="{{ $paquete->incluye }}">
        </div>
        
        <div class="mt-3">
        <button type="submit" class="btn btn-primary">save</button>
        <a href="{{ route('paquetes.index') }}" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
</body>
</html>