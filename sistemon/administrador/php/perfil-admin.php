<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-admin-hyf.css">
        <link rel="stylesheet" href="../css/perfil-admin.css">
    </head>
    <body>
    <header>
        <div class="header1">
            <img style="height: 30%;" src="../../multimedia/RAIZAPProjo.png" alt="">
        </div>
        <nav class="menu">
            <ul><li><a href="inicio-admin.php">inicio</a></li></ul>
            <ul>
                <li><a href="formu.php">productos</a>
                </li>
            </ul>
            <ul><li><a href="ordenes.php">ordenes</a></li></ul>
            <ul><li><a href="read-pqrs.php">pqrs</a></li></ul>
            <ul><li><a href="#">usuarios</a>
                <ul class="menuv">
                    <li><a href="rol-comp.php">compradores</a></li>
                    <li><a href="rol-emp.php">emprendedores</a></li>
                </ul>
            </li></ul>
            <ul><li><a href="#"><img src="../../multimedia/user.png" alt=""></a>
                <ul class="menuv">
                    <li><a href="perfil-admin.php">mi perfil</a></li>
                    <li><a href="index.php">cerrar sesion</a></li>
                </ul>
            </li></ul>
        </nav>
    </header>
    <main>
        <?php 
        include('../../backend/conexion.php');
            $result = $_COOKIE['administrador_cookie'];
            $user_admin="SELECT * FROM administrador where id_admin='$result'";
            $resultado=mysqli_query($conexion,$user_admin);
            while($row=mysqli_fetch_array($resultado)){?>
                <div class="info-user">
                    <h1>INFORMACION PERFIL</h1>
                    <p><?php echo "nombre usuario: ". $row['nombre']."".$row['apellido'] ?></p>
                    <p><?php echo "usuario: administrador" ?></p>
                </div>
          <?php  } ?>
    </main>
    </body>
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
</html>