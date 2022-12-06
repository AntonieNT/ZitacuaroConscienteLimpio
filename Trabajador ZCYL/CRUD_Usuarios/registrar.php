<?php
include('../config.php');
$con=conectar();

$curp = !empty($_POST['curp']) ? $_POST['curp'] : '';
$telefono = !empty($_POST['telefono']) ? $_POST['telefono'] : '';
$email= !empty($_POST['email']) ? $_POST['email'] : '';
$pass = !empty($_POST['password']) ? $_POST['password'] : '';


$insertar = "INSERT INTO usuarios (idusuarios, cctcurp, telefono, email, password) VALUES(
    NULL,
    ' $curp',
     '$telefono ', 
     '$email', 
     '$pass')";

$query = mysqli_query($con, $insertar);
if ($query) {
    header('Location: ../t9.php?curp='.$curp.'&telefono='.$telefono.'&email='.$email.'&password='.$pass.'');
    exit();
    }
mysqli_close($conn);
?>