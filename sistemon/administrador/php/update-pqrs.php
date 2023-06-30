<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../../backend/registroExitoso.css?2.0">
        <script>
    function devolver() {
        window.location.href = 'ordenes.php'
    }
</script>
    </head>
    <body>
    <?php 
    include('../../backend/conexion.php');
    $id_solicitud=$_POST['id_solicitud'];
    $respuesta=$_POST['respuesta_pqr'];
    $query_rta="UPDATE solicitudes SET respuesta='$respuesta' where id_solicitud='$id_solicitud'";
    if($conexion->query($query_rta)){ ?>
            <div class="confirm-update">
        <h1><?php echo "RESPUESTA REGISTRADA" ?></h1>
        <button onclick="devolver()">VOLVER AL INICIO</button>
    </div>
   <?php } ?>
    </body>

