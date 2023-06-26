<?php
include ('../../backend/conexion.php');
$id_prod = $_POST['id_prod'];
$estado_producto= $_POST['estado2'];
$actualizar = "UPDATE producto SET estado_producto = '$estado_producto' WHERE id_producto = '$id_prod'";
if ($conexion->query($actualizar))  {
    echo "cambios guardados";
}
else{
    echo "erroooooorrr";
}
?>
