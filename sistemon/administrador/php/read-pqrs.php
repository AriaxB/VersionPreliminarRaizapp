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
                        <li><a href="perfil-admin.php">mi perfil</a></li>
                        <li><a href="">cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <h2 style="text-align:center">PQRS</h2>
            </div>

            <div class="row">
                <a href="../../excel/excel-pqrs.php" class="btn ">descargar reporte</a>
            </div>

            <br>

            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>NOMBRE USUARIO</th>
                            <th>CORREO</th>
                            <th>DOCUMENTO</th>
                            <th>ID SOLICITUD</th>
                            <th>TIPO USUARIO</th>
                            <th>TIPO SOLICITUD</th>
                            <th>DESCRIPCION</th>
                            <th>RESPUESTA</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include('../../backend/conexion.php');
                        $query1 = "SELECT *
                    FROM solicitudes";
                        $resultado = mysqli_query($conexion, $query1);

                        while ($row = $resultado->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['nombre_usuario']; ?></td>
                                <td><?php echo $row['correo_usuario']; ?></td>
                                <td><?php echo $row['doc_usuario']; ?></td>
                                <td><?php echo $row['id_solicitud']; ?></td>
                                <td><?php echo $row['tipo_usuario']; ?></td>
                                <td><?php echo $row['tipo_solicitud']; ?></td>
                                <td><?php echo $row['descripcion_solicitud']; ?></td>
                                <td><?php echo $row['respuesta'] ?></td>
                                <td><form action="respuesta-pqrs.php" method="post">
                                    <input type="hidden" name="id_solicitud" id="id_solicitud" value="<?php echo $row['id_solicitud'] ?>">
                                    <button onclick="editarRegistro(<?php echo $row['id_solicitud']; ?>)">responder</button>
                                </form>
                                </td>
                                <td>
                                    <form action="delete-pqrs.php" method="post">
                                        <input type="hidden" id="id_solicitud" name="id_solicitud" value="<?php echo $row['id_solicitud']; ?>">
                                        <button onclick="eliminarRegistro(<?php echo $row['id_solicitud']; ?>)">Eliminar</button>
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