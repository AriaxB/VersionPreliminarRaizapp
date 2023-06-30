<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-hyf.css">
        <link rel="stylesheet" href="../css/ver-orden.css">
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
        <section class="orders">
        <?php 
            include('../../backend/conexion.php');
            $doc_comp=$_COOKIE['comprador_cookie'];
            $query_pedidos="SELECT * FROM orden_pedido where id_comp='$doc_comp'";
            $resultado=mysqli_query($conexion,$query_pedidos);
            while($row=mysqli_fetch_array($resultado)){ ?>
                    <div class="container-ordenes">
                        <div class="ordenes">
                            <h1><?php echo "orden No: ".$row['numero_orden']?></h1>
                            <p><?php echo "fecha de pedido: ".$row['fecha_pedido'] ?></p>
                            <p><?php echo "descripcion: ".$row['descripcion_orden'] ?></p>
                            <p><?php echo "valor total: ".$row['precio_total'] ?></p>
                        </div>
                    </div>
         <?php   } ?>
         </section>
    </main>
    </body>
</html>