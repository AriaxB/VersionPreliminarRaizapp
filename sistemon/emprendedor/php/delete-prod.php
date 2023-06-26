<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-emp-hyf.css">
        <link rel="stylesheet" href="../css/delete-prod.css?1.0">
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
                    </ul>
                </li>
            </ul>
            <ul><li><a href="#">historial</a></li></ul>
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
        <?php 
            include('../../backend/conexion.php');
            $id=$_POST['id'];
            $queryDelete="DELETE FROM producto where id_producto='$id'";
            if($conexion->query($queryDelete)===true){?>
            <div class="mensaje-confirm">
            <h1><?php echo "EL PRODUCTO FUE ELIMINADO EXITOSAMENTE" ?></h1>
                <button onclick="devolver()" >VOLVER AL INICIO</button>
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
                <a href=""><img  src="../../multimedia/icon-twitter.png" alt=""></a>
            </div>
        </div>
 </footer>
    </body>
</html>