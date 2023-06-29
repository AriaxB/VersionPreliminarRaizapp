<html>

<head>
    <title>RAIZAPP</title>
    <link rel="stylesheet" href="../css/style-admin-hyf.css">
    <script>
        function editarRegistro(id) {
            const formId = `formEdit_${id}`;
            document.getElementById(formId).submit();
        }

        function eliminarRegistro(id) {
            const formDelete = `formDelete_${id}`;
            document.getElementById(formDelete).submit();
        }
    </script>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #b54330;
        color: #ffff;
    }

    tr:nth-child(even) {
        background-color: #b54330;
    }

    .container {
        max-width: 800px;
        margin-left: 15%;
        padding: 20px;
    }

    .btn {
        display: inline-block;
        padding: 8px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        cursor: pointer;
        border: 1px solid transparent;
        border-radius: 4px;
        user-select: none;

    }

    .row>.btn {
        background-color: #b54330;
    }

    .row>.btn {
        color: #fff;
        text-decoration: none;
    }

    .row>h2 {
        text-align: left;
        color: #b54330;
        margin-top: 3%;
        font-size: 30px;
    }


    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
    }

    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a;
    }

    select {
        padding: 5px;
    }
</style>

<body>
    <header>
        <div class="header1">
            <img style="height: 30%;" src="../../multimedia/RAIZAPProjo.png" alt="">
        </div>
        <nav class="menu">
            <ul>
                <li><a href="inicio-admin.php">inicio</a></li>
            </ul>
            <ul>
                <li><a href="formu.php">productos</a>
                </li>
            </ul>
            <ul>
                <li><a href="ordenes.php">ordenes</a></li>
            </ul>
            <ul>
                <li><a href="">pqrs</a></li>
            </ul>
            <ul>
                <li><a href="#">usuarios</a>
                    <ul class="menuv">
                        <li><a href="rol-comp.php">compradores</a></li>
                        <li><a href="rol-emp.php">emprendedores</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="#"><img src="../../multimedia/user.png" alt=""></a>
                    <ul class="menuv">
                        <li><a href="">mi perfil</a></li>
                        <li><a href="">cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href=""><img src="../../multimedia/notificacion.png" alt=""></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <h2 style="text-align:center">GESTION DE PEDIDO</h2>
            </div>

            <div class="row">
                <a href="../../excel/excel-orden-pedido.php" class="btn ">descargar reporte</a>
            </div>

            <br>

            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>NUM DE ORDEN</th>
                            <th>FECHA DE PEDIDO</th>
                            <th>NOMBRE DE COMPRADOR</th>
                            <th>ID COMPRADOR</th>
                            <th>ID PRODUCTO</th>
                            <th>NOMBRE PRODUCTO</th>
                            <th>DESCRIPCION</th>
                            <th>VALOR UNITARIO</th>
                            <th>VALOR TOTAL</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include('../../backend/conexion.php');
                        $query1 = "SELECT *
                    FROM orden_pedido
                    LEFT JOIN producto ON orden_pedido.id_prod = producto.id_producto
                    left  JOIN comprador ON orden_pedido.id_comp = comprador.doc_comprador;";
                        $resultado = mysqli_query($conexion, $query1);

                        while ($row = $resultado->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['numero_orden']; ?></td>
                                <td><?php echo $row['fecha_pedido']; ?></td>
                                <td><?php echo $row['nombre_com']; ?></td>
                                <td><?php echo $row['id_comp']; ?></td>
                                <td><?php echo $row['id_prod']; ?></td>
                                <td><?php echo $row['nombre_producto']; ?></td>
                                <td><?php echo $row['descripcion']; ?></td>
                                <td><?php echo $row['precio']; ?></td>
                                <td><?php echo $row['precio_total']; ?></td>
                                <td><form action="update-orden.php" method="post">
                                    <input type="hidden" name="num_orden" id="num_orden" value="<?php $row['numero_orden'] ?>">
                                    <button onclick="editarRegistro(<?php echo $row['numero_orden']; ?>)">guardar cambios</button>
                                </form>
                                </td>
                                <td>
                                    <form action="delete-orden.php" method="post">
                                        <input type="hidden" id="num_orden" name="num_orden" value="<?php echo $row['numero_orden']; ?>">
                                        <button onclick="eliminarRegistro(<?php echo $row['numero_orden']; ?>)">Eliminar</button>
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