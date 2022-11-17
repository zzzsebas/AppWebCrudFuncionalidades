<?php
require_once('conexion.php');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo  = $_POST['correo'];
$id = $_POST['id'];
print($nombre);
print('<br>');
print($apellido);
print('<br>');
print($correo);
print('<br>');
print($id);

$sql=("INSERT INTO `estudiante` (`nombre`, `apellido`, `email`, `identificacion`) 
VALUES ('$nombre', '$apellido', '$correo', '$id')");

if (mysqli_query($conn, $sql)) {
    echo "Exito en la insercion";
    header("Location: ../index.html", TRUE, 301);
    exit();
    mysqli_close($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
?>