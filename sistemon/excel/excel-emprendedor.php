<?php
include('../backend/conexion.php');
header("Content-Type: application/xls");
header("Content-Disposition: attachment;filename=reporteEmprendedor.xls");

$resultado = mysqli_query($conexion, "SELECT * FROM emprendedor");
?>
<table>
    <thead>
        <tr>
            <th>CED_EMPRENDEDOR</th>
            <th>NOMBRE_EMPRENDIMIENTO</th>
            <th>CONTRASEÑA</th>
            <th>CORREO</th>
            <th>NUM_TELEFONO</th>
            <th>DIRECCION</th>
            <th>FECHA_NACIMINETO</th>
            <th>COMUNIDAD_ETNICA</th>
            <th>GENERO</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CIUDAD_EMP</th>
            <th>NUM_CUENTA</th>
            <th>BALANCE</th>
            <th>ESTADO_BALANCE</th>
            
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["ced_emprendedor"]; ?></td>
                <td><?php echo $row["nombre_emprendimiento"]; ?></td>
                <td><?php echo $row["contraseña"]; ?></td>
                <td><?php echo $row["correo"]; ?></td>
                <td><?php echo $row["num_telefono"]; ?></td>
                <td><?php echo $row["direccion"]; ?></td>
                <td><?php echo $row["fecha_nacimiento"]; ?></td>
                <td><?php echo $row["comunidad_etnica"]; ?></td>
                <td><?php echo $row["genero"]; ?></td>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["apellido"]; ?></td>
                <td><?php echo $row["ciudad_emp"]; ?></td>
                <td><?php echo $row["balance"]; ?></td>
                <td><?php echo $row["estado_balance"]; ?></td>      
                
            </tr>
        <?php } ?>
    </tbody>
</table>