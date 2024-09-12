<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Eliminar</title>
</head>
<body>
<?php

include_once("./conf/conf.php");

    $object = new Connection();
    $connection = $object->Connect();

    $id = isset($_GET['id']) ? $_GET['id'] : "";
    $consult = "SELECT * FROM Clientes WHERE id= :i";
    $preparation = $connection->prepare($consult);
    $preparation->bindParam(':i', $id, PDO::PARAM_INT);
    $preparation->execute();

    $clientes = $preparation->fetch(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <h2>Eliminar Cliente</h2>
    <form action="processes.php" method="POST">
        <div class="form-group">
            <input type="hidden" name="flag" value="3">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <dl class="row">
                <dt class="col-sm-2">Nombre</dt>
                <dd class="col-sm-10">
                    <p class="form-control-static"><?php echo $clientes['nombre']; ?></p>
                </dd>
                <dt class="col-sm-2">Teléfono</dt>
                <dd class="col-sm-10">
                    <p class="form-control-static"><?php echo $clientes['telefono']; ?></p>
                </dd>
                <dt class="col-sm-2">DUI</dt>
                <dd class="col-sm-10">
                    <p class="form-control-static"><?php echo $clientes['dui']; ?></p>
                </dd>
                <dt class="col-sm-2">Correo</dt>
                <dd class="col-sm-10">
                    <p class="form-control-static"><?php echo $clientes['correo']; ?></p>
                </dd>
                <dt class="col-sm-2">Dirección</dt>
                <dd class="col-sm-10">
                    <p class="form-control-static"><?php echo $clientes['direccion']; ?></p>
                </dd>
            </dl>

            <button class="btn btn-danger" type="submit">Eliminar</button>
            <a href="index.php" class="btn btn-secondary">Regresar</a>
        </div>
    </form>
</div>
</body>
</html>