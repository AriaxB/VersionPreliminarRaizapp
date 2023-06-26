<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-formulario.css?2.0">
    <title>Formulario Registro</title>
    <script>
    function validarFormularioComp() {
      var nombre = document.getElementById('nombres').value;
      var apellido = document.getElementById('apellidos').value;
      var ced_comp= document.getElementById('identificacion').value;
      var correo = document.getElementById('correo').value;
      var fecha_nac = document.getElementById('nacimiento').value;
      var telefono = document.getElementById('telefono').value;
      var ciudad = document.getElementById('ciudad').value;
      var direccion = document.getElementById('direccion').value;
      var nacionalidad = document.getElementById('nacionalidad').value;
      var contraseña = document.getElementById('contraseña').value;
      var reContraseña = document.getElementById('re-contraseña').value;
      if (nombre === '' || apellido === '' || ced_emp === '' || correo === '' || fecha_nac === '' || telefono === ''
          || ciudad === '' || direccion === '' || nacionalidad==='' || contraseña === '' || reContraseña === '') {
        alert('Por favor, complete todos los campos.');
        return false;
      } else {
        const password = contraseña;
        const confirmPassword = reContraseña;
        if (password === confirmPassword) {
          window.location.href = '../../index.php';
          return true;
        } else {
          alert('Las contraseñas no coinciden');
          return false;
        }
      }
    }
  </script>
</head>
<body>
    <form onsubmit=" return validarFormularioComp()" id="registro-comp" class="form-register" action="../../backend/register-comp.php" method="post">
        <h4>Formulario Registro</h4>
        <input class="controls" required type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
        <input class="controls" required type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
        <input class="controls" required type="number" name="Identificacion" id="identificacion" placeholder="Ingrese su documento de Identificación ">
        <input class="controls" required type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
        <input class="controls" required type="date" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiento">
        <input class="controls" required type="number" name="telefono" id="telefono" placeholder="Numero de Telefono">
        <input class="controls"  type="text" name="ciudad" id="ciudad" placeholder="ciudad">
        <input class="controls"  type="text" name="direccion" id="direccion" placeholder="Direccion">
        <h1>GENERO</h1>
        <select style="margin-bottom: 2%;" name="genero" id="genero">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
            <option value="intersexual">intersexual</option>
            <option value="nb">no binario</option>
        </select>
        <input class="controls"  type="text" name="nacionalidad" id="nacionalidad" placeholder="nacionalidad">
        <input type="hidden" name="id_user" id="id_user" value="<?php echo 2 ?>">
        <input class="controls" required type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña">
        <input class="controls" required type="password" name="re-contraseña" id="re-contraseña" placeholder="confirme su Contraseña">
        <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
        <button  class="botons" value="Registrar">REGISTRAR</button>
        <p><a href="../php/iniciar-sesion.php">¿Ya tengo Cuenta?</a></p>
    </form>
</body>
</html>