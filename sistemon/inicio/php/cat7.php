<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-hyf.css">
        <link rel="stylesheet" href="../css/cat.css?1.0">
    </head>
    <body>
    <header>
            <div class="header-top">
                <div class="logo"><img src="../../multimedia/RAIZAPProjo.png" alt=""> </div>
                <div class="buscador">
                    <input type="text" placeholder="busca tus catalogos o productos">
                    <button type="submit">BUSCAR</button>
                </div>
            </div>
            <div class="header-bottom">
                <nav>
                    <div class="menu">
                        <ul><a href="../../index.php">Inicio</a></ul>
                        <ul><a href="../../index.php">catalogo</a></ul>
                        <ul><a href="ofertas.php">Ofertas</a></ul>
                        <ul><a href="../../index.php">Productos</a></ul>
                        <ul><a href="nosotros.php">Nosotros</a></ul>
                    </div>
                </nav>
                <div class="botones">
                    <nav class="navegador">
                        <ul class="menuh">
                            <li><a href="#"><img src="../../multimedia/user.png" alt=""></a>
                                <ul class="menuv">
                                    <li><a href="iniciar-sesion.php">iniciar sesion</a></li>
                                    <li><a href="pre-registro.php">registrate</a></li>
                                </ul>
                    </nav>
                </div>
            </div>
        </header>
    <main>
    <?php 
    include('../../backend/conexion.php');
    $cat="SELECT * FROM catalogo where id_cat=7";
    $resultado=mysqli_query($conexion,$cat);?>
    <?php while($row1=mysqli_fetch_assoc($resultado)){?>
        <h1 class="nombre-cat"><?php echo $row1['nombre_cat'] ?></h1>
    <?php } ?>
    <?php $querycat="SELECT * from catalogo join producto on catalogo.id_cat=producto.id_catalogo where id_cat=7";
    $resultado2=mysqli_query($conexion,$querycat);
    ?>
     <section id="productos" class="productos-container">
    <?php while($row=mysqli_fetch_assoc($resultado2)){
               $nombre_prod = $row['nombre_producto'];
               $id_prod = $row['id_producto'];
               $precio_prod = $row['precio'];
               $cantidad_prod = $row['cantidad_producto'];
               $descripcion_prod = $row['descripcion'];
               $foto_prod = $row['foto']; 
        ?>
                <article class="prod">
                    <div class="details">
                        <img src="../../<?php echo $foto_prod ?>" alt="">
                        <h1><?php echo $nombre_prod ?></h1>
                        <span><?php echo $precio_prod ?></span><br>
                        <button onclick="verDetalles(<?php echo $id_prod ?>)">ver mas</button>
                    </div>
                </article>
  <?php  } ?>
  </section>
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
                <a href=""><img src="../../multimedia/icon-twitter.png" alt=""></a>
            </div>
        </div>
    </footer>
    </body>
</html>