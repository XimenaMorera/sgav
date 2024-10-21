<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Reserva</title>
</head>
<body>
<div class="container">
    <h1>Add Reserva</h1>
    <form method="POST" action="{{ route('reserva.store') }}">
        @csrf
        <div class="mb-3">
          <label for="cliente_id" class="form-label">Cliente ID</label>
          <input type="text" class="form-control" id="cliente_id" aria-describedby="clienteHelp" 
          name="cliente_id" placeholder="Cliente ID">
          <div id="clienteHelp" class="form-text">ID del Cliente</div>
        </div>
        <div class="mb-3">
          <label for="paquete_id" class="form-label">Paquete ID</label>
          <input type="text" class="form-control" id="paquete_id" aria-describedby="paqueteHelp"
          name="paquete_id" placeholder="Paquete ID">
          <div id="paqueteHelp" class="form-text">ID del Paquete</div>
        </div>
        <div class="mb-3">
          <label for="fecha_reserva" class="form-label">Fecha de Reserva</label>
          <input type="date" class="form-control" id="fecha_reserva" aria-describedby="reservaHelp"
          name="fecha_reserva">
        </div>
        <div class="mb-3">
          <label for="fecha_salida" class="form-label">Fecha de Salida</label>
          <input type="date" class="form-control" id="fecha_salida" aria-describedby="salidaHelp"
          name="fecha_salida">
        </div>
        <div class="mb-3">
          <label for="cantidad_personas" class="form-label">Cantidad de Personas</label>
          <input type="number" class="form-control" id="cantidad_personas" aria-describedby="cantidadHelp"
          name="cantidad_personas" placeholder="Número de personas">
        </div>
        <div class="mb-3">
          <label for="comentarios" class="form-label">Comentarios</label>
          <textarea class="form-control" id="comentarios" name="comentarios" rows="3" placeholder="Opcional"></textarea>
        </div>
        
        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Save</button>
          <a href="{{ route('reserva.index') }}" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
</body>
</html>
