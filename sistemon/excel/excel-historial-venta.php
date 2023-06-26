<?php
include('../backend/conexion.php');
header("Content-Type: application/xls");
header("Content-Disposition: attachment;filename=reporteHistorialVenta.xls");

$resultado = mysqli_query($conexion, "SELECT * FROM historial_venta");
?>
<table>
    <thead>
        <tr>
            <th>FECHA_HORA_VENTA</th>
            <th>ID_HISTORIAL_VENTA</th>
            <th>NUM_ORDEN</th>
            <th>NUM_GUIA</th>
            <th>CED_EMPRENDEDOR</th>
            
            
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["fecha_hora_venta"]; ?></td>
                <td><?php echo $row["id_historial_compra"]; ?></td>
                <td><?php echo $row["num_orden"]; ?></td>
                <td><?php echo $row["num_guia"]; ?></td>
                <td><?php echo $row["ced_emprendedor"]; ?></td>
                    
                
            </tr>
        <?php } ?>
    </tbody>
</table>