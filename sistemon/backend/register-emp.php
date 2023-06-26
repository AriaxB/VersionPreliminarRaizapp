
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
$nombre_emp = $_POST['nombres'];
$apellido_emp=$_POST['apellidos'];
$nombre_emprendimiento=$_POST['nombre_neg'];
$id_emp = $_POST['Identificacion'];
$correo_emp = $_POST['correo'];
$fecha_nac = $_POST['nacimiento'];
$telefono_emp = $_POST['telefono'];
$direccion_emp = $_POST['direccion'];
$ciudad_emp=$_POST['ciudad'];
$genero_emp = $_POST['genero'];
$comunidad_etnica=$_POST['comunidad_etnica'];
$contraseña_emp = $_POST['contraseña'];
$numero_cuenta_emp=$_POST['num_cuenta'];
$balance_emp=$_POST['balance'];
$id_user=$_POST['id_user'];

$sql2= "INSERT INTO emprendedor (nombre,apellido,nombre_emprendimiento, ced_emprendedor, correo, fecha_nacimiento,comunidad_etnica,
num_telefono,ciudad_emp, direccion, genero, contraseña,num_cuenta,balance,id_user) VALUES ('$nombre_emp','$apellido_emp','$nombre_emprendimiento', '$id_emp', '$correo_emp', '$fecha_nac','$comunidad_etnica', '$telefono_emp','$ciudad_emp', '$direccion_emp', '$genero_emp', '$contraseña_emp','$numero_cuenta_emp','$balance_emp','$id_user')";

if ($conexion->query($sql2) === true) {?>
        <div class="mensaje-confirm">
    <h1><?php echo "REGISTRO EXITOSO" ?></h1>
        <button onclick="devolver()" >VOLVER AL INICIO</button>
    </div>
<?php } else {
    echo "Error: " . $conexion->error;
}
?>
    </body>
</html>