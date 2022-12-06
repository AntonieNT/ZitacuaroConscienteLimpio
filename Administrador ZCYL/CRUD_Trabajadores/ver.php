<?php
include('../config.php');
$id = !empty($_GET['id']) ? $_GET['id'] : 0;

$consulta = "SELECT * FROM trabajadores WHERE 	idtrabajadores='$id' ";
$con = conectar();

echo $consulta;
if ($result = mysqli_query($con, $consulta)) {
    while ($row = $result->fetch_assoc()) {
    $field1name = $row["idtrabajadores"];
    $curp = $row["curp"];
    $telefono = $row["telefono"];
    $email = $row["email"];
    $pass = $row["password"];
    }
    header('Location: ../a11.php?curp='.$curp.'&telefono='.$telefono.'&email='.$email.'&password='.$pass.'');
    $result->free();
    }
?>