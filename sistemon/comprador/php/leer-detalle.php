<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-hyf.css">
        <link rel="stylesheet" href="../css/leer-detalle.css">
    <script>
        function redirigir4() {
            window.location.href = 'inicio-comp.php';
        }
    </script>
    </head>
    <body>
    <header>
        <div class="header-top">
            <div class="logo"><img src="../../multimedia/RAIZAPProjo.png" alt=""> </div>
            <form method="post" class="buscador" action="buscador.php">
                <input name="consultaProd" type="text" placeholder="busca tus catalogos o productos">
                <button type="submit">BUSCAR</button>
            </form>
        </div>
        <div class="header-bottom">
            <nav>
                <div class="menu">
                    <ul><a href="inicio-comp.php">Inicio</a></ul>
                    <ul><a href="inicio-comp.php">catalogo</a></ul>
                    <ul><a href="ofertas.php">Ofertas</a></ul>
                    <ul><a href="inicio-comp.php">Productos</a></ul>
                    <ul><a href="nosotros.php">Nosotros</a></ul>
                    <ul><a href="ayuda.php">Ayuda</a></ul>
                </div>
            </nav>
            <div class="botones">
                <nav class="navegador">
                    <ul class="menuh">
                        <li><a href="#"><img src="../../multimedia/user.png" alt=""></a>
                            <ul class="menuv">
                                <li><a href="perfil-comp.php">mi perfil</a></li>
                                <li><a href="#">cerrar sesion</a></li>
                            </ul>
                </nav>
            </div>
            <div class="iconos">
                <a href="#"><img src="../../multimedia/carrito.png" alt=""></a>
                <a href="#"><img src="../../multimedia/notificacion.png" alt=""></a>
            </div>
        </div>
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
                    <div class="hidden-form"><button class="return" onclick="redirigir4()">volver</button></div>
                    <form action="formu-pedido.php">
                        <input type="hidden" name="id_prod" id="id_prod">
                    </form>
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
                <a href=""><img class="Facebook-Icon" src="./multimedia/icon-facebook.png" alt=""></a>
                <a href=""><img src="./multimedia/icon-instagram.png" alt=""></a>
                <a href=""><img src="./multimedia/icon-twitter.png" alt=""></a>
            </div>
        </div>
    </footer>
    </body>
</html>