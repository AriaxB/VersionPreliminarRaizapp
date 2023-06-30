<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-hyf.css">
        <link rel="stylesheet" href="../css/style.css">
        <script>
        function redirigir4() {
            window.location.href = '../../index.php';
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
                    <ul><a href="ver-ordenes.php">mis ordenes</a></ul>
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
        </div>
    </header>
    <main>
    <section id="productos" class="productos-container">
<?php 
    include('../../backend/conexion.php');
    $consulta=$_POST['consultaProd'];
    $query="SELECT * FROM producto where nombre_producto='$consulta'";
    $result = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $nombre_prod = $row['nombre_producto'];
        $id_prod = $row['id_producto'];
        $precio_prod = $row['precio'];
        $cantidad_prod = $row['cantidad_producto'];
        $descripcion_prod = $row['descripcion'];
        $foto_prod = $row['foto']; ?>
        <article class="prod">
            <div class="details">
                <img src="./multimedia/productoo.png" alt="">
                <h1><?php echo $nombre_prod ?></h1>
                <span><?php echo $precio_prod ?></span><br>
                <button onclick="verDetalles4(<?php echo $id_prod ?>)">ver mas</button>
            </div>
        </article>
    <?php } ?>
    <form id="detailsForm" action="./inicio/php/leer-detalle.php" method="post">
        <input type="hidden" name="id" id="productId">
    </form>
</section>
    </main>
    </body>
</html>

?>