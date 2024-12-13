function validacionU() {
    // Obtiene referencias de los campos y contenedor de errores
    const nameuser = document.frm1.nameuser.value.trim();
    const pass = document.frm1.pass.value.trim();
    const correo = document.frm1.correo.value.trim();
    const errorMessages = document.getElementById('error-messages');
    const errorText = document.getElementById('error-text');

    // Limpia mensajes previos
    errorMessages.style.display = 'none';
    errorText.textContent = '';

    // Verifica si los campos están llenos
    if (nameuser.length === 0) {
        errorText.textContent = 'Por favor, ingresa un nombre de usuario.';
        errorMessages.style.display = 'block';
        document.getElementById("nameuser").focus();
        return false;
    }

    if (pass.length === 0) {
        errorText.textContent = 'Por favor, ingresa una contraseña.';
        errorMessages.style.display = 'block';
        document.getElementById("pass").focus();
        return false;
    }

    if (correo.length === 0) {
        errorText.textContent = 'Por favor, ingresa un correo electrónico.';
        errorMessages.style.display = 'block';
        document.getElementById("correo").focus();
        return false;
    }

    // Verifica el dominio del correo
    const dominioValido = /^[a-zA-Z0-9._%+-]+@(gmail\.com|upemor\.edu\.mx|hotmail\.com)$/;
    if (!dominioValido.test(correo)) {
        errorText.textContent = 'Por favor, ingresa un correo con un dominio válido (gmail.com, upemor.edu.mx, hotmail.com).';
        errorMessages.style.display = 'block';
        document.getElementById("correo").focus();
        return false;
    }

    // Envía el formulario
    document.frm1.submit();
}
