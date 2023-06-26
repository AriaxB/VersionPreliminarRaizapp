<?php 
    include('conexion.php');
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $query1 = "SELECT * FROM emprendedor WHERE correo='$correo' AND contraseña='$contraseña'";
    $query2 = "SELECT * FROM comprador WHERE correo='$correo' AND contraseña='$contraseña'";
    $query3 = "SELECT * FROM administrador WHERE correo='$correo' AND contraseña='$contraseña'";

    $resultado1 = mysqli_query($conexion, $query1);
    $resultado2 = mysqli_query($conexion, $query2);
    $resultado3 = mysqli_query($conexion, $query3);

    $row1 = mysqli_fetch_array($resultado1);
    $row2 = mysqli_fetch_array($resultado2);
    $row3 = mysqli_fetch_array($resultado3);

    if ($row1) {
        header("Location: ../emprendedor/php/inicio-emp.php");
    } else if ($row2) {
        header("Location: ../comprador/php/inicio-comp.php");
    } else if ($row3) {
        header("Location: ../administrador/php/inicio-admin.php");
    } else {
        echo "Error de inicio de sesión";
    }
?>
