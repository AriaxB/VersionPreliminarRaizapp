<?php
include('../backend/conexion.php');
header("Content-Type: application/xls");
header("Content-Disposition: attachment;filename=reportePqrs.xls");

$resultado = mysqli_query($conexion, "SELECT * FROM solicitudes");
?>
<table>
    <thead>
        <tr>
            <th>NOMBRE_USUARIO</th>
            <th>CORREO_USUARIO</th>
            <th>DOC_USUARIO</th>
            <th>ID_SOLICITUD</th>
            <th>TIPO_USUARIO</th>
            <th>TIPO_SOLICITUD</th>
            <th>DESCRIPCION_SOLICITUD</th>
            
            
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["nombre_usuario"]; ?></td>
                <td><?php echo $row["correo_usuario"]; ?></td>
                <td><?php echo $row["doc_usuario"]; ?></td>
                <td><?php echo $row["id_solicitud"]; ?></td>
                <td><?php echo $row["tipo_usuario"]; ?></td>
                <td><?php echo $row["tipo_solicitud"]; ?></td>
                <td><?php echo $row["descripcion_solicitud"]; ?></td>             
            </tr>
        <?php } ?>
    </tbody>
</table>