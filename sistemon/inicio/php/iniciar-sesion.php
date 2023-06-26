
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-iniciar_sesion.css?1.0">
    <title>Formulario Registro</title>
</head>
<body>
    <form id="registro-user" class="form-register" action="../../backend/inicio-sesion.php" method="post">
        <h4>Inicio de Sesion</h4>
        <input class="controls" required type="mail" name="correo" id="correo" placeholder="Ingrese su correo electronico">
        <input class="controls" required type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña">
        <button  class="botons" type="submit" value="Registrar">INICIAR SESION</button>
        <p><a href="pre-registro.php">registrarme</a></p>
        <p><a href="#">olvidaste tu Contraseña</a></p>
    </form>
</body>
</html>