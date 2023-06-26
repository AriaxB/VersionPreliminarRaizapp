<html>
<head>
    <link rel="stylesheet" href="../css/style-formulario.css?2.0">
    <title>RAIZAPP</title>
    <script>
    function validarFormulario() {
      // Obtener los campos del formulario
      var nombre = document.getElementById('nombre').value;
      var apellido = document.getElementById('apellido').value;
      var nombre_neg = document.getElementById('nombre_neg').value;
      var ced_emp = document.getElementById('identificacion').value;
      var correo = document.getElementById('correo').value;
      var fecha_nac = document.getElementById('nacimiento').value;
      var telefono = document.getElementById('telefono').value;
      var ciudad = document.getElementById('ciudad').value;
      var direccion = document.getElementById('direccion').value;
      var certificado = document.getElementById('certificado').value;
      var numero_cuenta = document.getElementById('num_cuenta').value;
      var balance = document.getElementById('balance').value;
      var contraseña = document.getElementById('contraseña').value;
      var reContraseña = document.getElementById('re-contraseña').value;

      // Verificar si los campos están vacíos
      if (nombre === '' || apellido === '' || nombre_neg === '' || ced_emp === '' || correo === '' || fecha_nac === '' || telefono === ''
          || ciudad === '' || direccion === '' || certificado === '' || numero_cuenta === '' || balance === '' || contraseña === '' || reContraseña === '') {
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
    <form onsubmit=" return validarFormulario()" id="registro-emp" class="form-register" action="../../backend/register-emp.php" method="post">
        <h4 id="registro-emp">Formulario Registro</h4>
        <input class="controls" required type="text" name="nombres" id="nombre" placeholder="Ingrese sus Nombres">
        <input class="controls" required type="text" name="apellidos" id="apellido" placeholder="Ingrese su Apellidos">
        <input class="controls" required type="text" name="nombre_neg" id="nombre_neg" placeholder="Ingrese el nombre de su emprendimiento">
        <input class="controls" required type="number" name="Identificacion" id="identificacion" placeholder="Ingrese su documento de Identificación ">
        <input class="controls" required type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
        <input class="controls" required type="date" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiento">
        <input class="controls" required type="number" name="telefono" id="telefono" placeholder="Numero de Telefono">
        <input class="controls"  type="text" name="ciudad" id="ciudad" placeholder="ciudad de residencia">
        <input class="controls"  type="text" name="direccion" id="direccion" placeholder="Direccion">
        <h1>GENERO</h1>
        <select name="genero" id="genero">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
            <option value="intersexual">intersexual</option>
            <option value="nb">no binario</option>
        </select>
        <br><br>
        <select style="margin-bottom: 2%;" name="comunidad_etnica" id="comunidad_etnica">
            <option value="palenquera">palenquera</option>
            <option value="raizal">raizal</option>
            <option value="indigena">indigena</option>
            <option value="afrocolombiano">afrocolombiano</option>
            <option value="negritudes">negritudes</option>
            <option value="gitano">gitano</option><br>
        </select>
        <label for="ca">adjunte certificado de autoreconocimiento</label><br>
        <div class="CA"><input class="controls" type="file" id="certificado"></div>
        <input class="controls"  type="number" name="num_cuenta" id="num_cuenta" placeholder="ingrese su numero de cuenta">
        <input class="controls"  type="number" name="balance" id="balance" placeholder="Balance">
        <input type="hidden" name="id_user" id="id_user" value="<?php $tip_user=1; echo $tip_user ?>">
        <input class="controls" required type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña">
        <input class="controls" required type="password" name="contraseña" id="re-contraseña" placeholder="Revalide su Contraseña">
       
        <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
        <button  class="botons"   value="Registrar">REGISTRAR</button>
        <p><a href="iniciar-sesion.php">¿Ya tengo Cuenta?</a></p>
    </form> 
</body>
</html>