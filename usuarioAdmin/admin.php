<?php 
include '../includes/head.php';

session_start();

// Verificar si la sesión está activa
if (!isset($_SESSION['usuario'])) {
    // Si no hay sesión, redirigir al login
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Barbershop México</title>
    <link rel="stylesheet" href="../Static/css/styles.css">
    <link rel="stylesheet" href="../Static/css/header.css">
    <link rel="stylesheet" href="../Static/css/index.css">
</head>
<body>
    <header>
        <div class="logo">Barberia Calaca</div>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="#about">Acerca</a></li>
                <li><a href="../logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <br>
            <h1 style="text-align: center"> CRUD Administrador. </h1>
            <br>
        </div>
            
        <div style="margin-left: 5%; margin-right: 5%">
            <p style="background-color: grey; border-radius: 10px; padding: 10px;">
            Bienvenido, administrador. En la parte inferior encontrarás las opciones para crear, leer, actualizar y eliminar registros. Usa estas herramientas para gestionar fácilmente los datos de los usuarios y los servicios de la barbería.
            </p>
        </div>

        <div class="logo_index">
            <img src="../Static/img/calaca2.png" alt="Descripción de la imagen" class="imagen_index">
        </div>  

        <div class="Enlaces_index">
            <a href="menuadmin.php" class="enlace">
            <img src="../Static/img/back.png">
            <p>Regresar</p>
            </a>
            <a href="create.php" class="enlace">
            <img src="../Static/img/c.png" alt="Crear">
            <p>Alta Servicios</p>
            </a> 
            <a href="read.php" class="enlace">
            <img src="../Static/img/r.png" alt="Leer">
            <p>Ver Servicios</p>
            </a> 
            <a href="consultaDU.php" class="enlace">
            <img src="../Static/img/u.gif" alt="Actualizar">
            <p>Actualizar Servicios</p>
            </a> 
            <a href="consultaDU.php" class="enlace">
            <img src="../Static/img/d.png" alt="Eliminar">
            <p>Eliminar Servicios</p>
            </a>  
        </div>

        <br>
    </main>

    <footer class="footer">
        <p>Derechos reservados © Barbería Calaca</p>
    </footer>
</body>
</html>
