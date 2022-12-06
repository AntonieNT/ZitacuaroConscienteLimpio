<?php
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
if ($id) {
    include('../config.php');
    $con = conectar();
    $eliminar = "delete from productos where idproductos=$id";
    $query = mysqli_query($con, $eliminar);
    if ($query) {
        header('Location: ../a4.php');
        exit();
    }
    mysqli_close($conn);
}
?>