function validacionU() {
    // Verifica si los campos están llenos
    if (document.frm1.nameuser.value.length == 0) {
        document.getElementById("nameuser").focus();
        return false;
    }
    if (document.frm1.pass.value.length == 0) {
        document.getElementById("pass").focus();
        return false;
    }
    if (document.frm1.correo.value.length == 0) {
        document.getElementById("correo").focus();
        return false;
    }

    // Envía el formulario
    document.frm1.submit();
}
