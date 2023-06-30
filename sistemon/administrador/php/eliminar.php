<?php 

include ('../../backend/conexion.php');
    $id_prod = $_POST['id_prod'];
    $eliminar2="DELETE FROM orden_pedido where id_prod='$id_prod'";
    if($conexion->query($eliminar2)){
        $eliminar = "DELETE  FROM producto WHERE id_producto = '$id_prod'";

        if ($conexion->query($eliminar))  {
            echo "registro eliminado";
        }
        else{
            echo "erroooooorrr";
        }
    }else{
        echo "eror";
    }
?>