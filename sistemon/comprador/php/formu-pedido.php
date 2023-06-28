<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Pedido</title>
</head>
<body>
  <h2>Formulario de Pedido</h2>

  <form action="" method="POST" class="form-pedido">
    
    <input class="controls" type="text" id="nombre" name="nombre" required placeholder="nombre"><br><br>

    <input class="controls" type="text" id="direccion" name="direccion" required placeholder="direccion"><br><br>

    <input class="controls" type="text" id="celular" name="celular" required placeholder="celular"><br><br>

    <input class="controls" type="email" id="correo" name="correo" required placeholder="correo electronico"><br><br>

    <input class="controls" type="number" id="cantidad" name="cantidad" required placeholder="cantidad"><br><br>

    <input class="controls" type="date" id="fecha_pedido" name="fecha_pedido" required placeholder="fecha de pedido"><br><br>

    <input class="controls" type="text" id="producto" name="producto" required placeholder="producto"><br><br>

    <label for="descripcion">Descripción:</label><br>
    <textarea class="controls" id="descripcion" name="descripcion" rows="4" cols="50"></textarea><br><br>

    <label for="tipo_pago">Tipo de Pago:</label>
    <input type="text" name="tipo_pago" id="tipo_pago" value="<?php echo "pago contra-entrega" ?>" readonly>
      
    </select><br><br>

    <label for="precio_unitario">Precio Unitario:</label>
    <input class="controls" type="text" id="precio_unitario" name="precio_unitario" required><br><br>

    <input type="submit" value="Realizar Pedido">

    <input type="submit" value="Comprar">
    <input type="submit" value="Cancelar">
  </form>
</body>
</html>