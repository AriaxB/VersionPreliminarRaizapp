function validarFormulario(event) {
    event.preventDefault(); // Evita el envío del formulario
  
    var password = document.getElementById("contraseña").value;
    var confirmPassword = document.getElementById("re-contraseña").value;
  
    if (password !== confirmPassword) {
      alert("Las contraseñas no coinciden");
      return false; 
    }
  
    document.getElementById("registro-comp").submit(); 
  }
  