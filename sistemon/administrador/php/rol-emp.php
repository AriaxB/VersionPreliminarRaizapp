<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-admin-hyf.css">
        <link rel="stylesheet" href="../css/style-tabla.css?1.0">
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
            <ul><li><a href="">pqrs</a></li></ul>
            <ul><li><a href="#">usuarios</a>
                <ul class="menuv">
                    <li><a href="rol-comp.php">compradores</a></li>
                    <li><a href="rol-emp.php">emprendedores</a></li>
                </ul>
            </li></ul>
            <ul><li><a href="#"><img src="../../multimedia/user.png" alt=""></a>
                <ul class="menuv">
                    <li><a href="perfil-admin.php">mi perfil</a></li>
                    <li><a href="">cerrar sesion</a></li>
                </ul>
            </li></ul>
        </nav>
    </header>
    <main><br><br>
    <div class="row">
            <h2 style="text-align:center">emprendedor</h2>
        </div>
    <div  class="row">
            <a href="../../excel/excel-emprendedor.php" class="btn ">descargar reporte</a>
        </div><br><br><br>
    <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>CED_EMPRENDEDOR</th>
                        <th>NOMBRE_EMPRENDIMIENTO</th>
                        <th>CORREO</th>
                        <th>NUM_TELEFONO</th>
                        <th>DIRECCION</th>
                        <th>COMUNIDAD_ETNICA</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CIUDAD_EMP</th>
                        <th>NUM_CUENTA</th>      
                        <th>MODIFICAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include('../../backend/conexion.php');
                    $query_emp="SELECT*FROM emprendedor";
                    $resultado=mysqli_query($conexion,$query_emp);
                    while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['ced_emprendedor']; ?></td>
                        <td><?php echo $row['nombre_emprendimiento']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['num_telefono']; ?></td>
                        <td><?php echo $row['direccion']; ?></td>
                        <td><?php echo $row['comunidad_etnica']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellido']; ?></td>
                        <td><?php echo $row['ciudad_emp']; ?></td>
                        <td><?php echo $row['num_cuenta']; ?></td>
                    <td><button onclick="editarRegistro(<?php echo $row['ced_emprendedor']; ?>)" >guardar cambios</button></form></td>
                    <td><form action="eliminar.php" method= "post" >
                        <input type="hidden" id="id_prod" name="num_orden" value="<?php echo $row['ced_emprendedor']; ?>">
                            <button onclick="eliminarRegistro(<?php echo $row['ced_emprendedor']; ?>)">Eliminar</button>                       

                </form>
            <?php } ?>
    </main>
    </body>
</html>