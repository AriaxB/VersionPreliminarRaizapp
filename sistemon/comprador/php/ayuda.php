<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ayuda.css">
    <link rel="stylesheet" href="../css/style-hyf.css">
    <title>Ayuda</title>
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
        <div class="container-form">
            <form action="">
                <span>Escribe tus inquietudes o reclamos para poder mejorar
                </span>
                <div class="camp1">
                    <label for="nombre" id="nombre">nombre</label>
                    <input  required type="text" name="nombre" id="nombre" placeholder="escribe tu nombre">
                </div>
                <div class="camp2">
                    <label for="correo" id="correo">correo</label>
                    <input required type="email" name="correo" id="correo" placeholder="escribe tu correo">
                </div>
                <div class="camp3">
                   <textarea name="pqr" id="pqr" cols="60" rows="15" placeholder="escribe tu queja o peticion"></textarea>
                </div>
                <div class="caja-boton">
                    <button name="enviar" type="submit">ENVIAR</button>
                </div>
            </form>
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