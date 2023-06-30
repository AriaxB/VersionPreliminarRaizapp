<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../plantillas/archivos-css/style-hyf.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@500&family=Arvo:wght@700&family=Exo+2:wght@100&family=Fjalla+One&family=Londrina+Shadow&family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./inicio/css/style-hyf.css">
    <link rel="stylesheet" href="./inicio/css/style.css">
    <title>RAIZAPP</title>
    <script>
        function verDetalles(id) {
            document.getElementById("productId").value = id;
            document.getElementById("detailsForm").submit();
        }
    </script>
</head>

<body>

    <header>
        <div class="header-top">
            <div class="logo"><img src="./multimedia/RAIZAPProjo.png" alt=""> </div>
            <form method="post" class="buscador" action="./inicio/php/buscador.php">
                <input name="consultaProd" type="text" placeholder="busca tus catalogos o productos">
                <button type="submit">BUSCAR</button>
            </form>
        </div>
        <div class="header-bottom">
            <nav>
                <div class="menu">
                    <ul><a href="#">Inicio</a></ul>
                    <ul><a href="#catalogos">catalogo</a></ul>
                    <ul><a href="./inicio/php/ofertas.php">Ofertas</a></ul>
                    <ul><a href="#productos">Productos</a></ul>
                    <ul><a href="./inicio/php/nosotros.php">Nosotros</a></ul>
                    <ul><a href="./inicio/php/sustentacion.php">Sustentacion</a></ul>
                </div>
            </nav>
            <div class="botones">
                <nav class="navegador">
                    <ul class="menuh">
                        <li><a href="#"><img src="./multimedia/user.png" alt=""></a>
                            <ul class="menuv">
                                <li><a href="./inicio/php/iniciar-sesion.php">iniciar sesion</a></li>
                                <li><a href="./inicio/php/pre-registro.php">registrate</a></li>
                            </ul>
                </nav>
            </div>
            <div class="iconos">
                <a href="#"><img src="./multimedia/carrito.png" alt=""></a>
                <a href="#"><img src="./multimedia/notificacion.png" alt=""></a>
            </div>
        </div>
    </header>
    <main>
    <div id="catalogos" class="vis-catalogos">
            <div class="frase-cat"><a href="#"><strong>catalogos</strong></a></div>
            <div class="container-catalogos-menu">
                <div class="cat">
                    <a href="./inicio/php/cat1.php"><img class="cat-img" src="./multimedia/cat-hogar.png" alt=""></a>
                    <h1><?php echo "Hogar y decoracion" ?></h1>             
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat2.php"><img class="cat-img" src="./multimedia/cat-salud.png" alt=""></a>
                        <h1><?php echo "Medicina Alternativa" ?></h1>
                        <input type="hidden">                  
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat3.php"><img class="cat-img" src="./multimedia/cat-muebles.png" alt=""></a>
                    <h1><?php echo "De todito" ?></h1>            
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat4.php"><img class="cat-img" src="./multimedia/cat-muebles.png" alt=""></a>
                    <h1><?php echo "Muebles" ?></h1>               
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat5.php"><img class="cat-img" src="./multimedia/cat-tecnologia.png" alt=""></a>
                    <h1><?php echo "Tecnologia" ?></h1>                
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat6.php"><img class="cat-img" src="./multimedia/cat-cocina.png" alt=""></a>
                    <h1><?php echo "Alimentos" ?></h1>                
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat7.php"><img class="cat-img" src="./multimedia/bolsa.png" alt=""></a>
                    <h1><?php echo "Cabello y Piel" ?></h1>                   
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat8.php"><img class="cat-img" src="./multimedia/cat-hombre.png" alt=""></a>
                    <h1><?php echo "Adultos" ?></h1>
                    
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat9.php"><img class="cat-img" src="./multimedia/cat-mujer.png" alt=""></a>
                    <h1><?php echo "Joyas" ?></h1>                   
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat10.php"><img class="cat-img" src="./multimedia/cat-niño.png" alt=""></a>
                    <h1><?php echo "Infantil" ?></h1>                    
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat11.php"><img class="cat-img" src="./multimedia/cat-artesania.png" alt=""></a>
                    <h1><?php echo "Artesanias" ?></h1>                    
                </div>
                <div class="cat">
                    <a href="./inicio/php/cat12.php"><img class="cat-img" src="./multimedia/cat-herramienta.png" alt=""></a>
                    <h1><?php echo "Herramientas" ?></h1>
                </div>
            </div>
        </div>
        <div id="carrusel-contenido">
            <div id="carrusel-caja">
                <div class="carrusel-elemento">
                    <a href=""><img class="imagenes" src="./multimedia/banner1.jpg"></a>
                </div>
                <div class="carrusel-elemento">
                    <a href=""><img class="imagenes" src="./multimedia/banner2.jpg"></a>
                </div>
                <div class="carrusel-elemento">
                    <a href=""><img class="imagenes" src="./multimedia/banner3.jpg"></a>
                </div>
            </div>
        </div>
        <section id="productos" class="productos-container">
            <?php
            include('./backend/conexion.php');
            $query = "SELECT*FROM producto where estado_producto='aceptado'";
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
                        <img src="./<?php echo $foto_prod ?>" alt="">
                        <h1><?php echo $nombre_prod ?></h1>
                        <span><?php echo $precio_prod ?></span><br>
                        <button onclick="verDetalles(<?php echo $id_prod ?>)">ver mas</button>
                    </div>
                </article>
            <?php } ?>
            <form id="detailsForm" action="./inicio/php/leer-detalle.php" method="post">
                <input type="hidden" name="id" id="productId">
            </form>
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
                <a href=""><img class="Facebook-Icon" src="./multimedia/icon-facebook.png" alt=""></a>
                <a href=""><img src="./multimedia/icon-instagram.png" alt=""></a>
                <a href=""><img src="./multimedia/icon-twitter.png" alt=""></a>
            </div>
        </div>
    </footer>
</body>

</html>