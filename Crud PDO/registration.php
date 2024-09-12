<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Insertar</title>
</head>
<body>
<div class="container mt-5">
    <h2>Insertar Cliente</h2>
    <form action="processes.php" method="POST">
        <input type="hidden" name="flag" value="1">
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
        </div>
        
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Teléfono" required>
        </div>
        
        <div class="mb-3">
            <label for="dui" class="form-label">DUI</label>
            <input class="form-control" type="text" name="dui" id="dui" placeholder="DUI" required>
        </div>
        
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input class="form-control" type="email" name="correo" id="correo" placeholder="Correo">
        </div>
        
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Dirección">
        </div>
        
        <button class="btn btn-primary" type="submit">Guardar</button>
        <a href="index.php" class="btn btn-secondary">Regresar</a>
    </form>
</div>

</body>
</html>