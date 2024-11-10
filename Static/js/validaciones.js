function validacion() {
    // Obtener los elementos de usuario y contraseña
    const usuario = document.getElementById("usuario");
    const contrasena = document.getElementById("contrasena");
    const alertaUsuario = document.getElementById("alertaUsuario");
    const alertaContrasena = document.getElementById("alertaContrasena");

    let isValid = true;

    // Validar el campo de usuario
    if (!usuario.value.match(/^[\w.-]+@upemor\.edu\.mx$/) || usuario.value.length < 16 || usuario.value.length > 36) {
        alertaUsuario.style.display = "block";
        alertaUsuario.innerText = "El correo debe ser de 16 a 36 caracteres y del dominio upemor.edu.mx.";
        usuario.focus();
        isValid = false;
    } else {
        alertaUsuario.style.display = "none";
    }

    // Validar el campo de contraseña
    if (!contrasena.value.match(/^[a-zA-Z0-9#@]{7,14}$/)) {
        alertaContrasena.style.display = "block";
        alertaContrasena.innerHTML = `
            <strong>Error:</strong> La contraseña debe tener entre 7 y 14 caracteres, 
            y solo puede contener letras, números, y los caracteres especiales <strong>#</strong> y <strong>@</strong>.
            <br><small>No se permiten puntos (.) ni guion bajo (_).</small>
        `;
        contrasena.focus();
        isValid = false;
    } else {
        alertaContrasena.style.display = "none";
    }

    // Retornar false si alguna validación falla, evitando el envío del formulario
    return isValid;
}
