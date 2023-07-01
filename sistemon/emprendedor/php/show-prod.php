<html>
<title>RAIZAPP</title>
<link rel="stylesheet" href="../css/style-emp-hyf.css">
<link rel="stylesheet" href="../css/show-prod.css?4.0">

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
                        <li><a href="ayuda.php">ayuda</a></li>
                    </ul>
                </li>
            </ul>
            <ul><li><a href="#"><img src="../../multimedia/user.png" alt=""></a>
                <ul class="menuv">
                    <li><a href="perfil-emp.php">mi perfil</a></li>
                    <li><a href="">cerrar sesion</a></li>
                </ul>
            </li></ul>
    </header>
    <main>
        <h1>MIS PRODUCTOS</h1>
        <section id="productos" class="productos-container">
            <?php
            include('../../backend/conexion.php');
            $query = "SELECT*FROM producto";
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
                        <img src="../../<?php echo $foto_prod ?>" alt="">
                        <h1><?php echo $nombre_prod ?></h1>
                        <span><?php echo $precio_prod ?></span><br>
                        <button onclick="verDetalles(<?php echo $id_prod ?>)">ver mas</button>
                    </div>
                </article>
            <?php } ?>
            <form id="detailsForm" action="read-details-prod.php" method="post">
                <input type="hidden" name="id" id="productId">
            </form>
            <script>
                function verDetalles(id) {
                    document.getElementById("productId").value = id;
                    document.getElementById("detailsForm").submit();
                }
            </script>
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
                <a href=""><img  src="../../multimedia/icon-twitter.png" alt=""></a>
            </div>
        </div>
 </footer>
</body>

</html>