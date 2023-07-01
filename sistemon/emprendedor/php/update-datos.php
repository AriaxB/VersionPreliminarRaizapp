<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/update-prod.css">
        <script>
        function devolver() {
            window.location.href = 'inicio-emp.php'
        }
    </script>
    </head>
    <body>
    <?php 
include('../../backend/conexion.php');
    $id_comprador=$_POST['Identificacion'];
    $nombre=$_POST['nombres2'];
    $apellido=$_POST['apellidos2'];
    $correo=$_POST['correo2'];
    $ciudad=$_POST['ciudad2'];
    $telefono=$_POST['telefono2'];
    $direccion=$_POST['direccion2'];
    $genero=$_POST['genero2'];
    $comunidad_etnica=$_POST['comunidad_etnica2'];
    $num_cuenta=$_POST['num_cuenta2'];
    $balance=$_POST['balance2'];
    $actualizar_comp="UPDATE emprendedor set nombre='$nombre',
    apellido='$apellido',correo='$correo',num_telefono='$telefono',
    direccion='$direccion',ciudad_emp='$ciudad',genero='$genero',num_cuenta='$num_cuenta',
    balance='$balance',comunidad_etnica='$comunidad_etnica',";
    if($conexion->query($actualizar_comp)){ ?> 
                 <div class="confirm-update">
                <h1><?php echo "LOS DATOS FUERON ACTUALIZADOS" ?></h1>
                <button onclick="devolver()">VOLVER AL INICIO</button>
            </div>
    <?php } ?>
    </body>
</html>
