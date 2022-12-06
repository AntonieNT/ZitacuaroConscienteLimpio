<?php
include('../config.php');
$con=conectar();

$id = $_GET["id"];
$nombre = !empty($_POST['nombre']) ? $_POST['nombre'] : '';
$valor = !empty($_POST['valor']) ? $_POST['valor'] : '';
$modificar= "UPDATE productos SET `idproductos`='$id',`nombre`='$nombre',`valorpuntos`='$valor' WHERE idproductos='$id'";

$query = mysqli_query($con, $modificar);
if ($query) {
    header('Location: ../t4.php');
    exit();
    }
mysqli_close($conn);
?>