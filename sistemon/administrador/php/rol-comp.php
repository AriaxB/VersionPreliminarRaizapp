<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../css/style-admin-hyf.css">
        <link rel="stylesheet" href="../css/style-tabla.css">
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
    <main>
    <div class="container">
        <div class="row">
            <h2 style="text-align:center">compradores</h2>
        </div>

        <div class="row">
            <a href="../../excel/excel-comprador.php" class="btn ">descargar reporte</a>
        </div>

        <br>

        <div class="row" style="margin-left: 1%;">
            <table>
                <thead>
                    <tr>
                        <th>DOC_COPRADOR</th>
                        <th>CONTRASEÑA</th>
                        <th>CORREO</th> 
                        <th>NUM_TELEFONO</th>
                        <th>DIRECCION</th>
                        <th>FECHA_NACIMIENTO</th>
                        <th>NACIONALIDAD</th>
                        <th>GENERO</th>
                        <th>NOMBRE_COM</th>
                        <th>APELLIDO_COM</th>
                        <th>CIUDAD_COM</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                               include('../../backend/conexion.php');
                               $query_emp="SELECT*FROM comprador";
                               $resultado=mysqli_query($conexion,$query_emp);
                    
                    while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['doc_comprador']; ?></td>
                        <td><?php echo $row['contraseña']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['num_telefono']; ?></td>
                        <td><?php echo $row['direccion']; ?></td>
                        <td><?php echo $row['fecha_nacimiento']; ?></td>
                        <td><?php echo $row['nacionalidad']; ?></td>
                        <td><?php echo $row['genero']; ?></td>          
                        <td><?php echo $row['nombre_com']; ?></td>
                        <td><?php echo $row['apellido_com']; ?></td>
                        <td><?php echo $row['ciudad_com']; ?></td>
                    <td><form action="eliminar.php" method= "post" >
                        <input type="hidden" id="id_prod" name="num_orden" value="<?php echo $row['doc_comprador']; ?>">
                            <button onclick="eliminarRegistro(<?php echo $row['doc_comprador']; ?>)">Eliminar</button>                       

                </form>
                </td>                
                </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </main>
    </body>
</html>