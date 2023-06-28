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
$row1 = mysqli_fetch_assoc($resultado1);
$row2 = mysqli_fetch_assoc($resultado2);
$row3 = mysqli_fetch_assoc($resultado3);
if ($row1) {
    $id_emprendedor = $row1['ced_emprendedor'];
    setcookie('emprendedor_cookie', $id_emprendedor, time() + 16 * 20, "/");
    header('Location:../emprendedor/php/inicio-emp.php');
} if ($row2) {
    $id_comprador = $row2['doc_comprador'];
    setcookie('comprador_cookie', $id_comprador, time() + 16 * 20, "/");
    header('Location:../comprador/php/inicio-comp.php');
} if ($row3) {
    $id_administrador = $row3['id_admin'];
    setcookie('administrador_cookie', $id_administrador, time() + 16 * 20, "/");
    header('Location:../administrador/php/inicio-admin.php');
} else {
    echo "Error: Credenciales incorrectas.";
}
?>
