<?php
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
if ($id) {
    include('../config.php');
    $con = conectar();
    $eliminar = "delete from materiales where idmateriales=$id";
    $query = mysqli_query($con, $eliminar);
    if ($query) {
        header('Location: ../a2.php');
        exit();
    }
    mysqli_close($conn);
}
?>