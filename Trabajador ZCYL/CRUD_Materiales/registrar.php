<?php
include('../config.php');
$con=conectar();

$nombre = !empty($_POST['nombre']) ? $_POST['nombre'] : '';
$valor = !empty($_POST['valor']) ? $_POST['valor'] : '';

$insertar= "INSERT INTO materiales(idmateriales , nombre, valorpuntos) VALUES (
    NULL,
    '$nombre',
    '$valor')";
$query = mysqli_query($con, $insertar);
if ($query) {
    header('Location: ../t3.php?nombre='.$nombre.'&valor='.$valor.'');
    exit();
    }
mysqli_close($conn);
?>