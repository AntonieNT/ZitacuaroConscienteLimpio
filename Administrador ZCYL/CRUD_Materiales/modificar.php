<?php
include('../config.php');
$con=conectar();

$id = $_GET["id"];
$nombre = !empty($_POST['nombre']) ? $_POST['nombre'] : '';
$valor = !empty($_POST['valor']) ? $_POST['valor'] : '';
$modificar= "UPDATE materiales SET `idmateriales`='$id',`nombre`='$nombre',`valorpuntos`='$valor' WHERE idmateriales ='$id'";

$query = mysqli_query($con, $modificar);
if ($query) {
    header('Location: ../a2.php');
    exit();
    }
mysqli_close($conn);
?>