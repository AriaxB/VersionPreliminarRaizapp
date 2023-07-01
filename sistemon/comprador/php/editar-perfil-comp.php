<?php 
    include('../../backend/conexion.php');
    $id_comp=$_COOKIE['comprador_cookie'];
    $editarComp="SELECT * FROM comprador WHERE doc_comprador='$id_comp'";
    $resultado=mysqli_query($conexion,$editarComp);
    $row=mysqli_fetch_array($resultado);
?>

<html>
    <head>
        <title>RAIZAPP</title>
        <link rel="stylesheet" href="../../inicio/css/style-formulario.css">
        <script>
                function actualizar(id) {
        const formId = `formEdit_${id}`;
        document.getElementById(formId).submit();
    }
        </script>
    </head>
    <body>
    <form  id="registro-comp" class="form-register" action="update-datos.php" method="post">
        <h4>Formulario Registro</h4>
        <input class="controls" required type="text" name="nombre2" id="nombres" placeholder="Ingrese su Nombre" value="<?php echo $row['nombre_com'] ?>">
        <input class="controls" required type="text" name="apellido2" id="apellidos" placeholder="Ingrese su apellido" value="<?php echo $row['apellido_com'] ?>">
        <input class="controls" required type="number" name="Identificacion" id="identificacion" placeholder="Ingrese su documento de Identificación " value="<?php echo $row['doc_comprador'] ?>"readonly>
        <input class="controls" required type="email" name="correo2" id="correo" placeholder="Ingrese su Correo" value="<?php echo $row['correo'] ?>">
        <input class="controls" required type="date" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiento"readonly value="<?php echo $row['fecha_nacimiento'] ?>">
        <input class="controls" required type="number" name="telefono2" id="telefono" placeholder="Numero de Telefono" value="<?php echo $row['num_telefono'] ?>">
        <input class="controls"  type="text" name="ciudad2" id="ciudad2" placeholder="ciudad" value="<?php echo $row['ciudad_com'] ?>">
        <input class="controls"  type="text" name="direccion2" id="direccion2" placeholder="Direccion" value="<?php echo $row['direccion'] ?>">
        <h1>GENERO</h1>
        <select style="margin-bottom: 2%;" name="genero2" id="genero" readonly>
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
            <option value="intersexual">intersexual</option>
            <option value="nb">no binario</option>
        </select>
        <input class="controls"  type="text" name="nacionalidad" id="nacionalidad" placeholder="nacionalidad" readonly value="<?php echo $row['nacionalidad'] ?>">
        <input type="hidden" name="id_user" id="id_user" value="<?php echo $row['doc_comprador'] ?>">
        <button  class="botons" value="Registrar" onclick="actualizar(<?php echo $row['doc_comprador'] ?>)">ACTUALIZAR</button>
    </form>
    </body>
</html>