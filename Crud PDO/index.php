<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clientes</title>
</head>
<body>
    <?php
    include_once("./conf/conf.php");

    $object = new Connection();
    $connection = $object->Connect();

    $consult = "SELECT * FROM Clientes";
    $preparation = $connection->prepare($consult);
    $preparation->execute();

    $clientes = $preparation->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="container mt-5">
        <h2>Listado de Clientes</h2>
        <a href="registration.php" class="btn btn-success" style="margin-left: 10px;">Insertar cliente</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>DUI</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) : ?>
                    <tr>
                        <td><?php echo $cliente['id']; ?></td>
                        <td><?php echo $cliente['nombre']; ?></td>
                        <td><?php echo $cliente['telefono']; ?></td>
                        <td><?php echo $cliente['dui']; ?></td>
                        <td><?php echo $cliente['correo']; ?></td>
                        <td><?php echo $cliente['direccion']; ?></td>
                        <td>
                            <a href="Edit.php?id=<?php echo $cliente['id']; ?>" class="btn btn-primary">Editar cliente</a>
                            <a href="Delete.php?id=<?php echo $cliente['id']; ?>" class="btn btn-danger">Eliminar cliente</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>