<?php
include('../backend/conexion.php');
header("Content-Type: application/xls");
header("Content-Disposition: attachment;filename=reporteCatalogo.xls");

$resultado = mysqli_query($conexion, "SELECT * FROM catalogo");
?>
<table>
    <thead>
        <tr>
            <th>NOMBRE_CAT</th>
            <th>ID_CATALOGO</th>
            <th>ID_PRO</th>
            
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["nombre_cat"]; ?></td>
                <td><?php echo $row["id_catalogo"]; ?></td>
                <td><?php echo $row["id_prod"]; ?></td>
               
                
                
            </tr>
        <?php } ?>
    </tbody>
</table>