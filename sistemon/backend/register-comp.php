
<html>
    <head>
        <title>RAIZAPP</title>
        <script>
        function devolver() {
            window.location.href = '../index.php'
        }
    </script>
     <link rel="stylesheet" href="registroExitoso.css">
    </head>
    <body>
    <?php
include('conexion.php');
$nombre_comp = $_POST['nombres'];
$apellido_comp=$_POST['apellidos'];
$id_comprador = $_POST['Identificacion'];
$correo_comp = $_POST['correo'];
$ciudad_comp=$_POST['ciudad'];
$fecha_nac = $_POST['nacimiento'];
$telefono_comp = $_POST['telefono'];
$direccion_comp = $_POST['direccion'];
$genero_comp = $_POST['genero'];
$nacionalidad_comp = $_POST['nacionalidad'];
$contraseña_comp = $_POST['contraseña'];
$id_user=$_POST['id_user'];

$sql = "INSERT INTO comprador (nombre_com,apellido_com, doc_comprador, correo, fecha_nacimiento, num_telefono,ciudad_com, direccion, genero, nacionalidad, contraseña,id_user) VALUES ('$nombre_comp','$apellido_comp', '$id_comprador', '$correo_comp', '$fecha_nac', '$telefono_comp','$ciudad_comp', '$direccion_comp', '$genero_comp', '$nacionalidad_comp', '$contraseña_comp','$id_user')";

if ($conexion->query($sql) === true) {?>
    <div class="mensaje-confirm">
    <h1><?php echo "REGISTRO EXITOSO" ?></h1>
        <button onclick="devolver()" >VOLVER AL INICIO</button>
    </div>
   <?php  }else {
    echo "Error: " . $conexion->error;
} ?>
    </body>
</html>

