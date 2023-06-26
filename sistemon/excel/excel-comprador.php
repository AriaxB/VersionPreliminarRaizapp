<?php
include('../backend/conexion.php');
header("Content-Type: application/xls");
header("Content-Disposition: attachment;filename=reporteComprador.xls");

$resultado = mysqli_query($conexion, "SELECT * FROM producto");
?>
<table>
    <thead>
        <tr>
            <th>NOMBRE_PRODUCTO</th>
            <th>ID_PRODUCTO</th>
            <th>FOTO</th>
            <th>CANTIDAD_PRODUCTO</th>
            <th>PRECIO</th>
            <th>DESCRIPCION</th>
            <th>ESTADO_PRODUCTO</th>
            <th>ID_CATALOGO</th>
            <th>ID_EMPRENDEDOR</th>
              
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["nombre_producto"]; ?></td>
                <td><?php echo $row["id_producto"]; ?></td>
                <td><?php echo $row["foto"]; ?></td>
                <td><?php echo $row["cantidad_producto"]; ?></td>
                <td><?php echo $row["precio"]; ?></td>
                <td><?php echo $row["descripcion"]; ?></td>
                <td><?php echo $row["estado_producto"]; ?></td>
                <td><?php echo $row["id_catalogo"]; ?></td> 
                <td><?php echo $row["id_emprendedor"]; ?></td>       
            </tr>
        <?php } ?>
    </tbody>
</table>