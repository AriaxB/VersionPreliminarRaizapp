<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-emp-hyf.css">
        <link rel="stylesheet" href="../css/ayuda.css">
    </head>
</html>
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
        <div class="container-form">
            <form action="../../backend/insert-pqrs.php" method="post">
                <span>Escribe tus inquietudes o reclamos para poder mejorar
                </span>
                <div class="camp1">
                    <label for="nombre" id="nombre">nombre</label>
                    <input  required type="text" name="nombre_usuario" id="nombre" placeholder="escribe tu nombre">
                </div>
                <div class="camp2">
                    <label for="correo" id="correo">correo</label>
                    <input required type="email" name="correo_usuario" id="correo" placeholder="escribe tu correo">
                </div>
                <div class="camp2">
                    <label for="doc_usuario" id="doc_usuario">documento</label>
                    <input required type="number" name="doc_usuario" id="correo" placeholder="escribe tu numero de documento">
                </div>
                <div class="camp3">
                   <textarea name="pqr" id="pqr" cols="60" rows="15" placeholder="escribe tu queja o peticion"></textarea>
                </div>
                <div class="camp">
                    <label for="tipo">Elija el tipo de solicitud</label>
                    <select id="solicitud" name="tipo_solicitud" >
                        <option value="peticiones">peticiones</option>
                        <option value="quejas">quejas</option>
                        <option value="reclamos">reclamos</option>
                        <option value="sugerencias">sugerencias</option>
                    <select>
                </div>
                <div class="camp">
                    <label for="tipo">usuario</label>
                    <select id="solicitud" name="tipo_usuario" >
                        <option value="peticiones">emprendedor</option>
                        <option value="quejas">comprador</option>
                    <select>
                </div>
                <div>
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
