<?php include 'includes/header.php'; ?>

<h6>Regístrate</h6>

<form method="POST" name="frm1" id="frm1" action="altausuario.php">
    <div class="form_container">
        <label for="nameuser" class="formulario_label">Usuario:</label>
        <input type="text" name="nameuser" id="nameuser" class="formulario_input">
    </div>

    <div class="form_container">
        <label for="pass" class="formulario_label">Contraseña:</label>
        <input type="password" name="pass" id="pass" class="formulario_input">
    </div>

    <div class="form_container">
        <label for="correo" class="formulario_label">Correo electrónico:</label>
        <input type="text" name="correo" id="correo" class="formulario_input">
    </div>

    <br>

    <div class="form_container">
        <input type="button" value="Enviar Datos" class="formulario_btn" onclick="validacionU()">
    </div>

    <script src='Static/js/appvausuario.js'></script>
</form>

<br><br><br>

<a href="index.php" class="enlace">
    <img src="./Static/img/back.png">
    <p>Regresar</p>
</a>

<?php include 'includes/footer.php'; ?>
