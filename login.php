<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentificación</title>
    <script src="Static/js/validaciones.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Static/css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Static/css/header.css">
    <link rel="stylesheet" href="Static/css/styles.css">
</head>
<body class="auth-page">
    <!-- Aquí incluirías el contenido de 'includes/header.php' directamente -->
    <header>
        <div class="logo">Calaca Barbera</div>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#about">Acerca</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <br>
        <h2 style="text-align: center; background-color: #ffffff; margin-left: 10%; margin-right: 10%; border-radius: 10px";>Iniciar Sesión</h2>
        <br>
        
        <form method="POST" name="frm1" id="frm1" action="validation.php" class="login-form">
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
    </main>

    <footer class="footer">
        <p>Derechos reservados © Barbería Calaca</p>
    </footer>

    
</body>
</html>
