<html>

<head>
    <title>RAIZAPP</title>
    <link rel="stylesheet" href="../../comprador/css/formu-pedido.css">
</head>

<body>
    <main>
    <?php 
         include('../../backend/conexion.php');
         $query1="SELECT *FROM orden_pedido
         LEFT JOIN producto ON orden_pedido.id_prod = producto.id_producto
         left  JOIN comprador ON orden_pedido.id_comp = comprador.doc_comprador;";
         $resultado=mysqli_query($conexion,$query1);
         $row=mysqli_fetch_array($resultado);
    
    ?>
        <h2 style="text-align: center;">Formulario de Pedido</h2>

        <form action="confirm-update.php" method="post" class="form-pedido">

            <input class="controls" type="text" id="nombre" name="nombre" required placeholder="nombre" value="<?php echo $row['nombre_com'] . " " . $row['apellido_com'] ?>" readonly><br><br>

            <input class="controls" type="text" id="direccion" name="direccion" required placeholder="direccion" value="<?php echo $row['direccion']; ?>" readonly><br><br>

            <input class="controls" type="text" id="celular" name="celular" required placeholder="celular" value="<?php echo $row['num_telefono'] ?>" readonly><br><br>

            <input class="controls" type="email" id="correo" name="correo" required placeholder="correo electronico" value="<?php echo $row['correo']; ?>" readonly><br><br>
            <label for="can-dispo">cantidades disponibles</label><br>
            <input class="controls" type="text" id="can_dispo" name="can_dispo" value="<?php echo $row['cantidad_producto']; ?>"  readonly><br><br>

            <input class="controls" type="number" id="cantidad" name="cantidad2" required placeholder="cantidad de unidades a comprar" value="<?php echo $row['un_comprada'] ?>"><br><br>

            <input class="controls" type="date" id="fecha_pedido" name="fecha_pedido" required placeholder="fecha de pedido" value="<?php echo $row['fecha_pedido']  ?>"><br><br>

            <input class="controls" type="text" id="producto" name="producto" required placeholder="producto" value="<?php echo $row['nombre_producto'] ?>" readonly><br><br>

            <textarea class="controls" id="descripcion" name="descripcion2" rows="4" cols="50" placeholder="agrega una descripcion"><?php echo $row['descripcion_orden'] ?></textarea><br><br>
            <input type="hidden" name="id_producto" id="id_producto" value="<?php echo $id_prod ?>">
            <input type="hidden" name="id_comprador" id="id_comprador" value="<?php echo $id_comp ?>">
            <label for="tipo_pago">Tipo de Pago:</label>
            <input class="controls" type="text" name="tipo_pago" id="tipo_pago" value="<?php echo "pago contra-entrega" ?>" readonly>

            </select><br><br>

            <label for="precio_unitario">Precio Unitario:</label><br>
            <input class="controls" type="number" id="precio_unitario" name="precio_unitario" required value="<?php echo $row['precio'] ?>" readonly><br><br>
            <input type="hidden" class="num_orden" id="num_orden" name="num_orden" value="<?php $row['numero_orden'] ?>">

            <input class="botons" type="submit" value="actualizar orden">
        </form>
    </main>
</body>

</html>