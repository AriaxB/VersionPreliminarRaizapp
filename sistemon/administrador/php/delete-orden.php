<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../../backend/registroExitoso.css?1.0">
        <script>
    function devolver() {
        window.location.href = 'ordenes.php'
    }
</script>
    </head>
    <body>
<?php
include_once('../../backend/conexion.php');
$orden_pedido = $_POST['num_orden'];
$queryDelete = "DELETE  FROM orden_pedido where numero_orden='$orden_pedido'";
if ($conexion->query($queryDelete)) { ?>
    <div class="confirm-update">
        <h1><?php echo "LA ORDEN FUE ELIMINADA" ?></h1>
        <button onclick="devolver()">VOLVER AL INICIO</button>
    </div>
<?php  } ?>
    </body>
</html>