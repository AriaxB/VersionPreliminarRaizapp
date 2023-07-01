<html>

<head>
    <title>RAIZAPP</title>
    <link rel="stylesheet" href="../css/style-emp-hyf.css">
    <link rel="stylesheet" href="../css/add-prod.css?1.0">
        <script>
    function editarcoProducto(id) {
        const formup = `formEdit_${id}`;
        document.getElementById(formup).submit();
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
        </nav>
    </header>
    <?php
    include('../../backend/conexion.php');
    $id = $_POST['id'];
    $query = "SELECT*FROM producto WHERE id_producto='$id'";
    $result = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $nombre_prod = $row['nombre_producto'];
        $id_prod = $row['id_producto'];
        $precio_prod = $row['precio'];
        $cantidad_prod = $row['cantidad_producto'];
        $descripcion_prod = $row['descripcion'];
        $foto_prod = $row['foto'];
    } ?>
    <form action="confirm-update.php" method="post" id="formup">
    <div class="files-img">
            <div class="container-inputs">
                <a  href="#imagen"><img src="../../multimedia/add-prod.png" alt=""></a>
                <input required type="file" name="foto2" id="imagen">
            </div>
             <div class="container-inputs">
                <a href="#imagen"><img src="../../multimedia/add-prod.png" alt=""></a>
                <input type="file" name="imagen" id="imagen">
            </div>
            </div>
        <div class="files">
            <div class="dato-prod">
                <input class="item-prod" required type="text" name="nombre_prod2" id="nombre_prod" value="<?php echo $nombre_prod ?>">
                <textarea class="item-prod" required name="descripcion2" id="descripcion" cols="70" rows="15"><?php echo $descripcion_prod?></textarea>
                <input class="item-prod" type="number" name="cantidad2" id="cantidad-prod" value="<?php echo $cantidad_prod ?>">
                <input class="item-prod" type="number" name="precio-prod2" id="precio-prod" value="<?php echo $precio_prod ?>">
                <input class="item-prod" type="hidden" name="ide_prod" id="id_prod" value="<?php echo $id_prod ?>">
            </div>
        <button value="enviar" onclick="editarcoProducto(<?php echo $id_prod ?>)">ACTUALIZAR REGISTRO</button>
    </form>
</body>

</html>