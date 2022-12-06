<?php
include('../config.php');
$id = !empty($_GET['id']) ? $_GET['id'] : 0;

$consulta = "SELECT * FROM usuarios WHERE 	idusuarios='$id' ";
$con = conectar();

echo $consulta;
if ($result = mysqli_query($con, $consulta)) {
    while ($row = $result->fetch_assoc()) {
    $field1name = $row["idusuarios"];
    $curp = $row["cctcurp"];
    $telefono = $row["telefono"];
    $email = $row["email"];
    $pass = $row["password"];
    }
    header('Location: ../t9.php?curp='.$curp.'&telefono='.$telefono.'&email='.$email.'&password='.$pass.'');
    $result->free();
    }
?>