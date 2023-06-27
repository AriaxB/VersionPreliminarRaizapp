<html>

<head>
    <title>RAIZAPP</title>
    <link rel="stylesheet" href="../css/style-emp-hyf.css">
    <link rel="stylesheet" href="../css/read-details.css?3.0">
    <script>
        function redirigir3() {
            window.location.href = 'show-prod.php';
        }
    </script>
    <script>
    function editarProducto(id) {
        const formId = `formEdit_${id}`;
        document.getElementById(formId).submit();
    }

    function eliminarProducto(id) {
        const formId = `formh_${id}`;
        document.getElementById(formId).submit();
    }
</script>

</head>

<body>
    <header>
        <div class="header1">
            <img style="height: 30%;" style="height: 40%;" src="../../multimedia/RAIZAPProjo.png" alt="">
        </div>
        <nav class="menu">
            <ul>
                <li><a href="../../index.php">inicio</a></li>
            </ul>
            <ul>
                <li><a href="">productos</a>
                    <ul class="menuv">
                        <li><a href="">subir</a></li>
                        <li><a href="">editar</a></li>
                        <li><a href="">mis productos</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="#"><img src="../../multimedia/user.png" alt=""></a>
                    <ul class="menuv">
                        <li><a href="">mi perfil</a></li>
                        <li><a href="">cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="name"><img src="../../multimedia/notificacion.png" alt=""></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        include('../../backend/conexion.php');
        $id = $_POST['id'];
        $sql = "SELECT*FROM producto where id_producto='$id'";
        $result = mysqli_query($conexion, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $nombre_prod = $row['nombre_producto'];
            $id_prod = $row['id_producto'];
            $precio_prod = $row['precio'];
            $cantidad_prod = $row['cantidad_producto'];
            $descripcion_prod = $row['descripcion'];
            $foto_prod = $row['foto']; ?>
            <div class="content-item">
                <div class="prod-description">
                    <div class="main-details">
                        <h1>NOMBRE: <?php echo $nombre_prod ?></h1>
                        <h1>ID PRODUCTO: <?php echo $id_prod ?></h1>
                        <h1>PRECIO: <?php echo $precio_prod ?></h1>
                        <h1>CANTIDAD: <?php echo $cantidad_prod ?></h1>
                        <h1>DESCRIPCION: <?php echo $descripcion_prod ?></h1>
                    </div>
                </div>
                                <div class="buttons">
            <div class="hidden-forms">
                <form method="post" action="update-prod.php" id="formEdit_<?php echo $id_prod ?>">
                    <input type="hidden" name="id" value="<?php echo $id_prod ?>">
                    <button onclick="editarProducto(<?php echo $id_prod ?>)">editar</button>
                </form>
                <form method="post" action="delete-prod.php" id="formh_<?php echo $id_prod ?>">
                    <input type="hidden" name="id" value="<?php echo $id_prod ?>">
                    <button onclick="eliminarProducto(<?php echo $id_prod ?>)">eliminar</button>
                </form>
            </div>
        </div>
                    <div class="hidden-form"><button class="return" onclick="redirigir3()">volver</button></div>
            <?php  } ?>
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