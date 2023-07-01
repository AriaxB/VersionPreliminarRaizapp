<html>

<head>
    <title>RAIZAPP</title>
    <link rel="stylesheet" href="../css/style-emp-hyf.css">
    <link rel="stylesheet" href="../css/update-prod.css">
    <link rel="stylesheet" href="">
    <script>
        function devolver() {
            window.location.href = 'inicio-emp.php'
        }
    </script>
</head>

<body>
<header>
        <div class="header1">
            <img style="height: 30%;" src="../../multimedia/RAIZAPProjo.png" alt="">
        </div>
        <nav class="menu">
            <ul><li><a href="inicio-emp.php">inicio</a></li></ul>
            <ul>
                <li><a href="">productos</a>
                    <ul class="menuv">
                        <li><a href="add-prod.php">subir</a></li>
                        <li><a href="show-prod.php">editar</a></li>
                        <li><a href="show-prod.php">mis productos</a></li>
                        <li><a href="ayuda.php">ayuda</a></li>
                    </ul>
                </li>
            </ul>
            <ul><li><a href="#"><img src="../../multimedia/user.png" alt=""></a>
                <ul class="menuv">
                    <li><a href="">mi perfil</a></li>
                    <li><a href="">cerrar sesion</a></li>
                </ul>
            </li></ul>
        </nav>
    </header>
    <main>
        <?php
        include('../../backend/conexion.php');
        $id_prod=$_POST['ide_prod'];
        $nombre_prod = $_POST['nombre_prod2'];
        $precio_prod = $_POST['precio-prod2'];
        $cantidad_prod = $_POST['cantidad2'];
        $descripcion_prod = $_POST['descripcion2'];
        $foto_prod = $_POST['foto2'];
        $sql = "UPDATE producto set nombre_producto='$nombre_prod',precio='$precio_prod',
cantidad_producto='$cantidad_prod',descripcion='$descripcion_prod' where id_producto='$id_prod' ";
        if ($conexion->query($sql)) { ?>
            <div class="confirm-update">
                <h1><?php echo "LOS DATOS DEL PRODUCTO FUERON ACTUALIZADOS EXITOSAMENTE" ?></h1>
                <button onclick="devolver()">VOLVER AL INICIO</button>
            </div>
        <?php } else {
            die("error: " . mysqli_connect($sql));
        } ?>
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