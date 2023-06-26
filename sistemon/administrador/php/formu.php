<?php
include ('../../backend/conexion.php');
$sql = "SELECT * FROM producto";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<script>
    function editarRegistro(id) {
        const formId = `formEdit_${id}`;
        document.getElementById(formId).submit();
    }

    function eliminarRegistro(id) {
        const formDelete = `formDelete_${id}`;
        document.getElementById(formDelete).submit();
    }
</script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #b54330;
            color: #ffff;
        }
        tr:nth-child(even) {
            background-color: #b54330;
        }
        .container {
            max-width: 800px;
            margin-left:15%;
            padding: 20px;
        }
        .btn {
            display: inline-block;
            padding: 8px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            user-select: none;
            
        }
        .row >.btn{
            background-color: #b54330;
        }
        .row >.btn {
            color: #fff;
            text-decoration: none;
        }
        
        .row >h2{
        text-align:left;
        color: #b54330;
        margin-top: 3%;
        font-size: 30px;
}

        
        .btn-primary {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }
        .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a;
        }
        select {
            padding: 5px;
        }
    </style>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-admin-hyf.css">
    <title>RAIZAPP</title>
</head>
<body>
<header>
        <div class="header1">
            <img style="height: 30%;" src="../../multimedia/RAIZAPProjo.png" alt="">
        </div>
        <nav class="menu">
            <ul><li><a href="inicio-admin.php">inicio</a></li></ul>
            <ul>
                <li><a href="">productos</a>
                </li>
            </ul>
            <ul><li><a href="formu.php">registros</a></li></ul>
            <ul><li><a href="#">usuarios</a>
                <ul class="menuv">
                    <li><a href="">compradores</a></li>
                    <li><a href="formu.php">emprendedores</a></li>
                </ul>
            </li></ul>
            <ul><li><a href="#"><img src="../../multimedia/user.png" alt=""></a>
                <ul class="menuv">
                    <li><a href="">mi perfil</a></li>
                    <li><a href="">cerrar sesion</a></li>
                </ul>
            </li></ul>
            <ul><li><a href=""><img src="../../multimedia/notificacion.png" alt=""></a></li></ul>
        </nav>
    </header>
    <main>
    <div class="container">
        <div class="row">
            <h2 style="text-align:center">GESTION DE PRODUCTOS</h2>
        </div>

        <div class="row">
            <a href="../../excel/excel-prod.php" class="btn ">descargar reporte</a>
        </div>

        <br>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>NOMBRE PRODUCTO</th>
                        <th>CANTIDAD</th> 
                        <th>PRECIO</th>
                        <th>DESCRIPCION</th>
                        <th>ESTADO PRODUCTO</th>
                        <th>REFERENCIA</th>
                        <th>MODIFICAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['nombre_producto']; ?></td>
                        <td><?php echo $row['cantidad_producto']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><form method="post"action="editar.php"><select value="<?php echo $row['estado_producto']; ?>" name="estado2" id="estado_prod"><option value="aceptado">aceptado<option value="denegado">denegado</option></select></td>
                        <td><?php echo $row['id_producto']; ?>
                        <input type="hidden" name="id_prod" value="<?php echo $row['id_producto']; ?>">
                    </td>
                    <td><button onclick="editarRegistro(<?php echo $row['id_producto']; ?>)" >guardar cambios</button></form></td>
                    <td><form action="eliminar.php" method= "post" >
                        <input type="hidden" id="id_prod" name="id_prod" value="<?php echo $row['id_producto']; ?>">
                            <button onclick="eliminarRegistro(<?php echo $row['id_producto']; ?>)">Eliminar</button>                       

                </form>
                </td>                
                </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </main>
    <footer class="FooterMain">
        <div class="links-footer">
            <div class="container-links">
                <a href="#">se parte de nuestra comunidad</a>
                <a href="#">terminos y condiciones</a>
                <a href="#">informacion</a>
            </div>
        </div>
        <div class="container-links2">
            <a href="#">accesibilidad</a>
            <a href="#">como cuidamos tus datos</a>
            <a href="#">Ayuda</a>
        </div>
        <div class="HelpConteners">
            <h2 class="TheReds">!Nuestras Redes!</h2>
            <div class="Reds">
                <a href=""><img class="Facebook-Icon" src="../../multimedia/icon-facebook.png" alt=""></a>
                <a href=""><img src="../../multimedia/icon-instagram.png" alt=""></a>
                <a href=""><img  src="../../multimedia/icon-twitter.png" alt=""></a>
            </div>
        </div>
 </footer>
</body>

</html>
