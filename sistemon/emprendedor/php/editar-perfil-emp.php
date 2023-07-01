<?php 
    include('../../backend/conexion.php');
    $id_emp=$_COOKIE['emprendedor_cookie'];
    $editarEmp="SELECT * FROM emprendedor WHERE ced_emprendedor='$id_emp'";
    $resultado=mysqli_query($conexion,$editarEmp);
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
    <form id="registro-emp" class="form-register" action="update-datos.php" method="post">
        <h4 id="registro-emp">Formulario Registro</h4>
        <input class="controls" required type="text" name="nombres2" id="nombre" placeholder="Ingrese sus Nombres" value="<?php echo $row['nombre'] ?>">
        <input class="controls" required type="text" name="apellidos2" id="apellido" placeholder="Ingrese su Apellidos" value="<?php echo $row['apellido'] ?>">
        <input class="controls" required type="text" name="nombre_neg2" id="nombre_neg" placeholder="Ingrese el nombre de su emprendimiento" value="<?php echo $row['nombre_emprendimiento'] ?>">
        <input class="controls" required type="number" name="Identificacion" id="identificacion" placeholder="Ingrese su documento de Identificación " readonly value="<?php echo $row['ced_emprendedor'] ?>">
        <input class="controls" required type="email" name="correo2" id="correo" placeholder="Ingrese su Correo" value="<?php echo $row['correo'] ?>">
        <input class="controls" required type="date" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiento" readonly value="<?php echo $row['fecha_nacimiento'] ?>">
        <input class="controls" required type="number" name="telefono2" id="telefono" placeholder="Numero de Telefono" value="<?php echo $row['num_telefono'] ?>">
        <input class="controls"  type="text" name="ciudad2" id="ciudad" placeholder="ciudad de residencia" value="<?php echo $row['ciudad_emp'] ?>">
        <input class="controls"  type="text" name="direccion2" id="direccion" placeholder="Direccion" value="<?php echo $row['direccion'] ?>">
        <h1>GENERO</h1>
        <select name="genero2" id="genero" value="<?php echo $row['genero'] ?>">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
            <option value="intersexual">intersexual</option>
            <option value="nb">no binario</option>
        </select>
        <br><br>
        <select style="margin-bottom: 2%;" name="comunidad_etnica2" id="comunidad_etnica" value="<?php echo $row['comunidad_etnica'] ?>">
            <option value="palenquera">palenquera</option>
            <option value="raizal">raizal</option>
            <option value="indigena">indigena</option>
            <option value="afrocolombiano">afrocolombiano</option>
            <option value="negritudes">negritudes</option>
            <option value="gitano">gitano</option><br>
        </select>
        <label for="ca">adjunte certificado de autoreconocimiento</label><br>
        <div class="CA"><input class="controls" type="file" id="certificado"></div>
        <input class="controls"  type="number" name="num_cuenta2" id="num_cuenta" placeholder="ingrese su numero de cuenta" value="<?php echo $row['num_cuenta'] ?>">
        <input class="controls"  type="number" name="balance2" id="balance" placeholder="Balance" value="<?php echo $row['balance'] ?>">
        <button  class="botons"   value="Registrar">ACTUALIZAR</button>
    </form> 
    </body>
</html>