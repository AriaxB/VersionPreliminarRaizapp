<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-hyf.css">
        <link rel="stylesheet" href="../css/perfil-comp.css">
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
    <?php 
        include('../../backend/conexion.php');
            $result = $_COOKIE['comprador_cookie'];
            $user_comp="SELECT * FROM comprador where doc_comprador='$result'";
            $resultado=mysqli_query($conexion,$user_comp);
            while($row=mysqli_fetch_array($resultado)){?>
                <div class="info-user">
                    <h1>INFORMACION PERFIL</h1>
                    <p><?php echo "nombre usuario: ". $row['nombre_com']." ".$row['apellido_com'] ?></p>
                    <p><?php echo "ciudad: ". $row['ciudad_com'] ?></p>
                    <p><?php echo "direccion: ". $row['direccion'] ?></p>
                    <p><?php echo "usuario: comprador" ?></p>
                </div>
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
                <a href=""><img src="../../multimedia/icon-twitter.png" alt=""></a>
            </div>
        </div>
    </footer>
        </header>
    </body>
</html>