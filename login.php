<?php include 'includes/header.php';?>

<H2>Autentificación</H2>
 
<form method="POST" name="frm1" id="frm1" action="validation.php">

    <div class="form_container">
        <label for="usuario" class="formulario_label">Usuario:</label>
        <input type="text" name="usuario" id="usuario" class="formulario_input">
        <p class="alert alert-danger" id="alertaUsuario" style="display:none;">
        El correo tiene que ser de 16 a 36 dígitos y solo puede contener letras, números, arroba, puntos y guion bajo. Debe tener el dominio <strong>upemor.edu.mx</strong>.
        </p>
    </div> 

    <div class="form_container">
        <label for="contrasena" class="formulario_label">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" class="formulario_input">
        <p class="alert alert-danger" id="alertaContrasena" style="display:none;">
        La contraseña debe tener entre 7 y 14 caracteres, y solo puede contener letras, números y los caracteres especiales # y @.
        </p>
    </div>    

    <div class="form_container">            
        <button type="submit" class="formulario_btn" value="Enviar" onclick="return validacion()">Enviar</button>
        <p class="alert alert-success" id="successMessage" style="display:none;">
        Usuario y contraseña válidos. Pulsa el botón para validar en la base de datos.
        </p>
    </div> 

</form> 

<br><br><br>

<a href="index.php" class="enlace">
    <img src="./Static/img/regresar.png">
    <p>Regresar</p>
</a>

<script src="Static/js/validaciones.js"></script>  