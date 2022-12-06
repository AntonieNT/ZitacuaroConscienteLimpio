<?php
include('../config.php');
$con=conectar();

$id = $_GET["id"];
$curp = !empty($_POST['curp']) ? $_POST['curp'] : '';
$telefono = !empty($_POST['telefono']) ? $_POST['telefono'] : '';
$email= !empty($_POST['email']) ? $_POST['email'] : '';
$pass = !empty($_POST['password']) ? $_POST['password'] : '';

$modificar = "UPDATE usuarios SET `idusuarios`='$id',`cctcurp`='$curp',`telefono`='$telefono',`email`='$email',`password`='$pass' WHERE idusuarios='$id'";

$query = mysqli_query($con, $modificar);
if ($query) {
    header('Location: ../t8.php');
    exit();
    }
mysqli_close($conn);
?>