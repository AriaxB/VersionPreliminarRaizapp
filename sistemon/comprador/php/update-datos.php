<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/update-prod.css">
        <script>
        function devolver() {
            window.location.href = 'inicio-comp.php'
        }
    </script>
    </head>
    <body>
    <?php 
include('../../backend/conexion.php');
    $id_comprador=$_POST['id_user'];
    $nombre=$_POST['nombre2'];
    $apellido=$_POST['apellido2'];
    $correo=$_POST['correo2'];
    $ciudad=$_POST['ciudad2'];
    $telefono=$_POST['telefono2'];
    $direccion=$_POST['direccion2'];
    $genero=$_POST['genero2'];
    $actualizar_comp="UPDATE comprador set nombre_com='$nombre',
    apellido_com='$apellido',correo='$correo',num_telefono='$telefono',
    direccion='$direccion',ciudad_com='$ciudad',genero='$genero'";
    if($conexion->query($actualizar_comp)){ ?> 
                 <div class="confirm-update">
                <h1><?php echo "LOS DATOS FUERON ACTUALIZADOS" ?></h1>
                <button onclick="devolver()">VOLVER AL INICIO</button>
            </div>
    <?php } ?>
    </body>
</html>
