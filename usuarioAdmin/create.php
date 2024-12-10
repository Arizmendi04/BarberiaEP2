<?php  
include '../includes/head.php';
session_start();

// Verificar si la sesión está activa
if (!isset($_SESSION['usuario'])) {
    // Si no hay sesión, redirigir al login
    header("Location: ../login.php");
    exit(); // Asegura que el script no continúe después de redirigir
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incorporar Servicios</title>
    <link rel="stylesheet" href="../Static/css/styles.css">
    <link rel="stylesheet" href="../Static/css/header.css">
    <link rel="stylesheet" href="../Static/css/login.css">
    <script src="../Static/js/appvlidacion.js" defer></script>
</head>
<body>
    <header>
        <div class="logo">Barbershop México</div>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="#about">Acerca</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1 style="text-align: center; margin: 20px 0;">Incorpora Servicios</h6>

        <form method="POST" name="frm1" id="frm1" action="altaservicios.php" class="login-form">
            <div >
                <label for="nombre" class="formulario_label">Nombre del servicio:</label>
                <input type="text" name="nombre" id="nombre" class="formulario_input">
            </div> 

            <div >
                <label for="precio" class="formulario_label">Precio del servicio:</label>
                <input 
                    type="text" 
                    name="precio" 
                    id="precio" 
                    class="formulario_input" 
                    onkeypress="if((event.keyCode < 48) || (event.keyCode >57)){ event.returnValue=false; }"
                    maxlength="4"
                >
            </div>

            <br>

            <div >                    
                <input type="button" value="Enviar Datos" class="formulario_btn" onclick="validacion()">                    
            </div>         
        </form>

        <a href="admin.php" class="enlace">
            <img src="../Static/img/back.png" alt="Regresar">
            <p>Regresar</p>
        </a>
    </main>

    <footer class="footer">
        <p>Derechos reservados © Barbería Calaca</p>
    </footer>
</body>
</html>
