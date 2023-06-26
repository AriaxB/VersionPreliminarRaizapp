<?php
include('../backend/conexion.php');
header("Content-Type: application/xls");
header("Content-Disposition: attachment;filename=reporteOrdenPedido.xls");

$resultado = mysqli_query($conexion, "SELECT * FROM orden_pedido");
?>
<table>
    <thead>
        <tr>
            <th>NUMERO_ORDEN</th>
            <th>PRECIO_TOTAL</th>
            <th>CANTIDAD_PRODUCTOS</th>
            <th>PRECIO_UNITARIO</th>
            <th>NUMERO_GUIA</th>
            <th>ID_PRODUCTO</th>
            <th>CED_EMPRENDEDOR</th>
            <th>DOC_COMPRADOR</th>
              
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["num_orden"]; ?></td>
                <td><?php echo $row["precio_total"]; ?></td>
                <td><?php echo $row["cantidad_productos"]; ?></td>
                <td><?php echo $row["precio_unitario"]; ?></td>
                <td><?php echo $row["numero_guia"]; ?></td>
                <td><?php echo $row["id_producto"]; ?></td>
                <td><?php echo $row["ced_emprendedor"]; ?></td>
                <td><?php echo $row["cod_comprador"]; ?></td>      
            </tr>
        <?php } ?>
    </tbody>
</table>