<?php 

include ('../../backend/conexion.php');
    $id_prod = $_POST['id_prod'];
    $eliminar = "DELETE  FROM producto WHERE id_producto = '$id_prod'";

    if ($conexion->query($eliminar))  {
        echo "registro eliminado";
    }
    else{
        echo "erroooooorrr";
    }



?>