<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Pedido</title>
</head>
<body>
<header>
        <div class="header-top">
            <div class="logo"><img src="../../multimedia/RAIZAPProjo.png" alt=""> </div>
            <form method="post" class="buscador" action="buscador.php">
                <input name="consultaProd" type="text" placeholder="busca tus catalogos o productos">
                <button type="submit">BUSCAR</button>
            </form>
        </div>
        <div class="header-bottom">
            <nav>
                <div class="menu">
                    <ul><a href="inicio-comp.php">Inicio</a></ul>
                    <ul><a href="inicio-comp.php">catalogo</a></ul>
                    <ul><a href="ofertas.php">Ofertas</a></ul>
                    <ul><a href="inicio-comp.php">Productos</a></ul>
                    <ul><a href="nosotros.php">Nosotros</a></ul>
                    <ul><a href="ayuda.php">Ayuda</a></ul>
                </div>
            </nav>
            <div class="botones">
                <nav class="navegador">
                    <ul class="menuh">
                        <li><a href="#"><img src="../../multimedia/user.png" alt=""></a>
                            <ul class="menuv">
                                <li><a href="perfil-comp.php">mi perfil</a></li>
                                <li><a href="#">cerrar sesion</a></li>
                            </ul>
                </nav>
            </div>
            <div class="iconos">
                <a href="#"><img src="../../multimedia/carrito.png" alt=""></a>
                <a href="#"><img src="../../multimedia/notificacion.png" alt=""></a>
            </div>
        </div>
    </header>
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