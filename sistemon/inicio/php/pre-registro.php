<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pre-registro.css?1.0">
    <title>REGISTRO</title>
</head>
<body>
    <div class="pre-register">
        <div class="container-img">
            <img class="imagen1" src="../../multimedia/planilla.png" alt="">
        </div>
        <div class="frase">
            <h1>Para crear tu cuenta necesitamos <br> validar tus datos</h1>
        </div>
        <div class="msg">
            <input required type="checkbox" id="checkbox"><label for="">Autorizo el uso de mis datos de acuerdo a la Declaración de Privacidad y acepto los Términos y condiciones</label> 
        </div>
        <div class="opcion-emprendedor">
           <button onclick="redireccionar('form-emprendedor.php')"><h1>Crear Cuenta Emprendedor</h1></button>
        </div>
        <div class="opcion-comprador">
            <button onclick="redireccionar('form-comprador.php')"><h1>Crear Cuenta  Comprador  </h1></button>
        </div>
    </div>
    <script>
    function redireccionar(url) {
        if (document.getElementById('checkbox').checked) {
            window.location.href = url;
        }else{
            alert('Por favor, marque el checkbox antes de continuar.');
        }
    }
</script>
</body>
</html>