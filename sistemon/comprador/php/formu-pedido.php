<?php 
   include('../../backend/conexion.php');
   $id_prod=$_POST['id_prod'];
   $id_comp=$_COOKIE['comprador_cookie'];
   echo $id_comp;
   $query="SELECT*FROM producto where id_producto='$id_prod'";
   $resultado1=mysqli_query($conexion,$query);
   $row1=mysqli_fetch_array($resultado1);
    $query2="SELECT * FROM comprador where doc_comprador='$id_comp'";
   $resultado=mysqli_query($conexion,$query2);
   $row=mysqli_fetch_array($resultado);
?>



<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Pedido</title>
  <link rel="stylesheet" href="../css/style-hyf.css">
  <link rel="stylesheet" href="../css/formu-pedido.css">
  <script>
            function generarOrden(id) {
        const formOrden = `formEdit_${id}`;
        document.getElementById(formOrden).submit();
    }
    </script>
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
                    <ul><a href="ver-ordenes.php">mis ordenes</a></ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
            
  <h2>Formulario de Pedido</h2>

<form action="../../backend/add-orden.php" method="POST" class="form-pedido">
  
  <input class="controls" type="text" id="nombre" name="nombre" required placeholder="nombre" value="<?php echo $row['nombre_com']." ".$row['apellido_com'] ?>" readonly><br><br>

  <input class="controls" type="text" id="direccion" name="direccion" required placeholder="direccion" value="<?php echo $row['direccion'];?>" readonly><br><br>

  <input class="controls" type="text" id="celular" name="celular" required placeholder="celular" value="<?php echo $row['num_telefono'] ?>" readonly><br><br>

  <input class="controls" type="email" id="correo" name="correo" required placeholder="correo electronico" value="<?php echo $row['correo'];?>" readonly><br><br>
    <label for="can-dispo">cantidades disponibles</label><br>
  <input class="controls" type="text" id="can_dispo" name="can_dispo"  value="<?php echo $row1['cantidad_producto'];?>" readonly><br><br>

  <input class="controls" type="number" id="cantidad" name="cantidad" required placeholder="cantidad de unidades a comprar"><br><br>

  <input class="controls" type="date" id="fecha_pedido" name="fecha_pedido" required placeholder="fecha de pedido"><br><br>

  <input class="controls" type="text" id="producto" name="producto" required placeholder="producto" value="<?php echo $row1['nombre_producto'] ?>" readonly><br><br>

  <textarea class="controls" id="descripcion" name="descripcion" rows="4" cols="50" placeholder="agrega una descripcion"></textarea><br><br>
    <input type="hidden" name="id_producto" id="id_producto" value="<?php echo $id_prod ?>">
    <input type="hidden" name="id_comprador" id="id_comprador" value="<?php echo $id_comp ?>">
  <label for="tipo_pago">Tipo de Pago:</label>
  <input class="controls" type="text" name="tipo_pago" id="tipo_pago" value="<?php echo "pago contra-entrega" ?>" readonly>
    
  </select><br><br>

  <label for="precio_unitario">Precio Unitario:</label><br>
  <input class="controls" type="number" id="precio_unitario" name="precio_unitario" required value="<?php echo $row1['precio'] ?>"><br><br>
  
  
  <input class="botons" type="submit" value="realizarPedido" onclick="generarpedido(<?php echo $id_prod ?>)">
</form>
    </main>
</body>
</html>