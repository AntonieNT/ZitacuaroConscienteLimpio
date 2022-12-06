<?php
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
if ($id) {
    include('../config.php');
    $con = conectar();
    $eliminar = "delete from usuarios where idusuarios =$id";
    $query = mysqli_query($con, $eliminar);
    if ($query) {
        header('Location: ../t8.php');
        exit();
    }
    mysqli_close($conn);
}
?>