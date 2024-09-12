<?php

include_once("./conf/conf.php");
$object = new Connection();
$connection = $object->Connect();

$option = isset($_POST['flag']) ? $_POST['flag']:"";
$nombre = isset($_POST['nombre']) ? $_POST['nombre']:"";
$telefono = isset($_POST['telefono']) ? $_POST['telefono']:"";
$dui = isset($_POST['dui']) ? $_POST['dui']:"";
$correo = isset($_POST['correo']) ? $_POST['correo']:"";
$direccion = isset($_POST['direccion']) ? $_POST['direccion']:"";
$id = isset($_POST['id']) ? $_POST['id']:"";

if ($option == 1) {
    $consult = "INSERT INTO Clientes(nombre,telefono,dui,correo,direccion)
                VALUES(:nom, :te, :du, :co, :di)";
    $result = $connection->prepare($consult);
    $result->bindParam(':nom', $nombre);
    $result->bindParam(':te', $telefono);
    $result->bindParam(':du', $dui);
    $result->bindParam(':co', $correo);
    $result->bindParam(':di', $direccion);

    $execute = $result->execute();
    return_index($execute);

} else if ($option ==2) {
    $consult = "UPDATE Clientes SET
                    nombre = :nom,
                    telefono = :te,
                    dui = :du,
                    correo = :co,
                    direccion = :di
                WHERE id = :i";
    $result = $connection->prepare($consult);
    $result->bindParam(':nom', $nombre);
    $result->bindParam(':te', $telefono);
    $result->bindParam(':du', $dui);
    $result->bindParam(':co', $correo);
    $result->bindParam(':di', $direccion);
    $result->bindParam(':i', $id);

    $execute = $result->execute();
    return_index($execute);

} else if ($option == 3) {
    $consult = "DELETE FROM Clientes WHERE id = :i";
    $result = $connection->prepare($consult);
    $result->bindParam(':i', $id);

    $execute = $result->execute();
    return_index($execute);

}

function return_index($execute) {
    if ($execute) {
        header('Location: index.php');
    } else {
        echo "error";
    }
}

$con -> close();
?>