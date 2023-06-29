<script>
            function devolver() {
            window.location.href = 'ordenes.php'
        }
</script>
<?php
include('../../backend/conexion.php');
$num_orden = $_POST['num_orden'];
$descripcion = $_POST['descripcion2'];
$cantidadUnidades = $_POST['cantidad2'];
$precioUnitario = $_POST['precio_unitario'];
$valorTotal = $precioUnitario * $cantidadUnidades;
$query_actualizar = "UPDATE orden_pedido SET descripcion_orden='$descripcion', un_comprada='$cantidadUnidades',
    precio_total='$valorTotal' where numero_orden='$num_orden'";
if ($conexion->query($query_actualizar)) { ?>
    <div class="confirm-update">
        <h1><?php echo "LOS DATOS DE LA ORDEN FUERON ACTUALIZADOS EXITOSAMENTE" ?></h1>
        <button onclick="devolver()">VOLVER AL INICIO</button>
    </div>
<?php } ?>




