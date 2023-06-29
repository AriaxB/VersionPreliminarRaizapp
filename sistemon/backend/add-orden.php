<html>

<head>
    <title>RAIZAPP</title>
    <link rel="stylesheet" href="../inicio/css/style-hyf.css">
    <link rel="stylesheet" href="registroExitoso.css">
    <script>
        function devolver() {
            window.location.href = '../comprador/php/inicio-comp.php'
        }
    </script>
</head>

<body>
    <?php
    include('conexion.php');
    $id_prod = $_POST['id_producto'];
    $id_comp = $_POST['id_comprador'];
    $descripcion = $_POST['descripcion'];
    $pago = $_POST['tipo_pago'];
    $fecha_pedido=$_POST['fecha_pedido'];
    $cantidadProductos = $_POST['cantidad'];
    $nombre_comp = $_POST['nombre'];
    $nombre_prod = $_POST['producto'];
    $precio = $_POST['precio_unitario'];
    $precio_total = $precio * $cantidadProductos;
    $query = "INSERT INTO orden_pedido(descripcion_orden,tipo_pago,un_comprada,fecha_pedido,precio_total,id_comp,id_prod)
    values ('$descripcion','$pago','$cantidadProductos','$fecha_pedido','$precio_total','$id_comp','$id_prod')";
    if ($conexion->query($query)) { ?>
        <div class="mensaje-confirm">
            <h1><?php echo "Hola ".$nombre_comp." tu pedido de ".$nombre_prod." por valor de ".$precio_total." ha sido realizado" ?></h1>
            <button onclick="devolver()">VOLVER AL INICIO</button>
        </div>
    <?php } ?>
</body>

</html>