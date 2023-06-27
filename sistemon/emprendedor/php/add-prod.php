<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-emp-hyf.css?">
        <link rel="stylesheet" href="../css/add-prod.css?6.0">
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
        <form action="../../backend/producto-agregar.php" method="post" enctype="multipart/form-data">
            <div class="files-img">
            <div class="container-inputs">
                <a  href="#imagen"><img src="../../multimedia/add-prod.png" alt=""></a>
                <input required type="file" name="imagen" id="imagen">
            </div>
            </div>
        <div class="files">
            <div class="dato-prod">
                <input class="item-prod" required type="text" name="nombre_prod" id="nombre_prod" placeholder="escriba el nombre del producto">
                <textarea class="item-prod" required name="descripcion" id="descripcion" cols="70" rows="15" placeholder="ingrese una descripcion breve de su producto"></textarea>
                <input class="item-prod" type="number" name="cantidad" id="cantidad-prod" placeholder="cantidad de unidades vender">
                <input class="item-prod" type="number" name="precio-prod" id="precio-prod" placeholder="ingresa el precio del producto">
                <select name="catalogo" id="catalogo">
                    <option value="hogar_decoracion">hogar y decoracion</option>
                    <option value="medicina">medicina alternativa</option>
                    <option value="todo">De todito</option>
                    <option value="muebles">muebles</option>
                    <option value="tecnologia">tecnologia</option>
                    <option value="alimentos">alimentos</option>
                    <option value="cabello_piel">cabello y piel</option>
                    <option value="adultos">adultos</option>
                    <option value="joyas">joyas</option>
                    <option value="infantil">infantil</option>
                    <option value="artesanias">artesanias</option>
                    <option value="herramientas">herramientas</option>
                </select>
                <input style="margin-top: 1%;" type="text" name="estado_prod" id="estado_prod" readonly value="<?php echo "en proceso" ?>">
                <button value="enviar" type="submit">SUBIR PRODUCTO</button>
            </div>
        </form>
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