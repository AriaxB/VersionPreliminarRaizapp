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
            <th>ID_PROD</th>
            <th>ID_COMP</th>
            <th>DESCRIPCION</th>
            <th>PAGO</th>
            <th>UNIDADES COMPRADAS</th>
            <th>FECHA PEDIDO</th>
              
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["numero_orden"]; ?></td>
                <td><?php echo $row["precio_total"]; ?></td>
                <td><?php echo $row["id_prod"]; ?></td>
                <td><?php echo $row["id_comp"]; ?></td>
                <td><?php echo $row["descripcion"]; ?></td>
                <td><?php echo $row["tipo_pago"]; ?></td>
                <td><?php echo $row["un_comprada"]; ?></td>
                <td><?php echo $row["fecha_pedido"]; ?></td>      
            </tr>
        <?php } ?>
    </tbody>
</table>