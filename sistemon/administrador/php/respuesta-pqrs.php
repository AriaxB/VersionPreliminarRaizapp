<html>

<head>
    <title>RAIZAPP</title>
    <link rel="stylesheet" href="../../comprador/css/ayuda.css">
    <link rel="stylesheet" href="../../comprador/css/formu-pedido.css">
    <script>
        function editarRegistro(id) {
            const formId = `formEdit_${id}`;
            document.getElementById(formId).submit();
        }
    </script>
</head>

<body>
    <main>
        <div class="container-form">
            <?php
            include('../../backend/conexion.php');
            $id_solicitud = $_POST['id_solicitud'];
            $query1 = "SELECT * FROM solicitudes where id_solicitud='$id_solicitud'";
            $resultado = mysqli_query($conexion, $query1);
            $row = mysqli_fetch_array($resultado);
            ?>
            <form action="update-pqrs.php" method="post">
                <span>Escribe tus inquietudes o reclamos para poder mejorar
                </span>
                <div class="camp1">
                    <label for="nombre" id="nombre">nombre</label>
                    <input required type="text" name="nombre_usuario" id="nombre" placeholder="escribe tu nombre" value="<?php echo $row['nombre_usuario'] ?>" readonly>
                </div>
                <div class="camp2">
                    <label for="correo" id="correo">correo</label>
                    <input required type="email" name="correo_usuario" id="correo" placeholder="escribe tu correo" value="<?php echo $row['correo_usuario'] ?>" readonly>
                </div>
                <div class="camp2">
                    <label for="doc_usuario" id="doc_usuario">documento</label>
                    <input required type="number" name="doc_usuario" id="documento" placeholder="escribe tu numero de documento" value="<?php echo $row['doc_usuario'] ?>" readonly>
                </div>
                <div class="camp3">
                    <textarea name="pqr" id="pqr" cols="60" rows="15" placeholder="escribe tu queja o peticion" readonly><?php echo $row['descripcion_solicitud'] ?></textarea>
                </div>
                <div class="camp">
                    <label for="tipo">solicitud</label>
                    <input id="solicitud" name="tipo_solicitud" value="<?php echo $row['tipo_solicitud'] ?>" readonly>
                </div>
                <div class="camp">
                    <label for="tipo">usuario</label>
                    <input id="solicitud" name="tipo_usuario" value="<?php echo $row['tipo_usuario'] ?>" readonly>
                </div>
                <div class="camp3">
                    <textarea name="respuesta_pqr" id="pqr" cols="60" rows="15" placeholder="escribe la respuesta a la solicitud"></textarea>
                </div>
                <div>
                    <input type="hidden" name="id_solicitud" value="<?php echo $row['id_solicitud'] ?>">
                </div>
                <div>
                    <div class="caja-boton">
                        <button  onclick="editarRegistro(<?php echo $row['id_solicitud'] ?>)">ENVIAR</button>
                    </div>
            </form>
        </div>
    </main>
</body>

</html>