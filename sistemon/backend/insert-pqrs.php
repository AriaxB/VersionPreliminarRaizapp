<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="registroExitoso.css">
    </head>
    <body>
    <script>
        function devolver() {
            window.location.href = '../comprador/php/inicio-comp.php'
        }
    </script>
    </body>
</html>

<?php 
    include('../backend/conexion.php');
    $nombre_usuario=$_POST['nombre_usuario'];
    $correo_usuario=$_POST['correo_usuario'];
    $descripcion_solicitud=$_POST['pqr'];
    $doc_usuario=$_POST['doc_usuario'];
    $tipo_solicitud=$_POST['tipo_solicitud'];
    $tipo_usuario=$_POST['tipo_usuario'];
    $insert_pqr="INSERT INTO solicitudes (nombre_usuario,correo_usuario,
    doc_usuario,tipo_usuario,tipo_solicitud,descripcion_solicitud)values('$nombre_usuario','$correo_usuario',
    '$doc_usuario','$tipo_usuario','$tipo_solicitud','$descripcion_solicitud')";
    if($conexion->query($insert_pqr)===true){ ?>
                <div class="confirm-update">
                <h1><?php echo "HEMOS ENVIADO TU SOLICITUD, PRONTO SERA RESPONDIDA" ?></h1>
                <button onclick="devolver()">VOLVER AL INICIO</button>
            </div>
   <?php } ?>