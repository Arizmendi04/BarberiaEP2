<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Static/css/styles.css">
    <link rel="stylesheet" href="../Static/css/login.css">
    <link rel="stylesheet" href="../Static/css/header.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../Static/js/appvausuario.js" defer></script>
</head>
<body class="auth-page">
    <!-- Header -->
    <header>
        <div class="logo">Calaca Barbera</div>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="#about">Acerca</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <br>
        <h1 style="text-align: center; background-color: #ffffff; margin-left: 10%; margin-right: 10%; border-radius: 10px";>Registro</h2>
        <br>
        <form method="POST" name="frm1" id="frm1" action="../altausuario.php" class="login-form">
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

            <div class="form_container" style="margin-top: 20px;">
                <input type="button" value="Enviar Datos" class="formulario_btn" onclick="validacionU()">
            </div>
        </form>


    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>Derechos reservados © Barbería Calaca</p>
    </footer>
</body>
</html>
