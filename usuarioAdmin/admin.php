<?php include '../includes/head.php' ?>

<?php
    session_start();
    // Verificar si la sesión está activa
    if (!isset($_SESSION['usuario'])) {
        // Si no hay sesión, redirigir al login
        header("Location: ../login.php");
        exit();
    }
?>

<article class="entrada">
    <div class="entrada__imagen">
        <div class="entrada_contenido">
            <h4 class="no-margin">Barbershop México</h4>

            <p>
                <a href="create.php">
                    <img src="../Static/img/c.png">
                </a> |
                <a href="read.php">
                    <img src="../Static/img/r.png">
                </a> |
                <a href="consultaDU.php">
                    <img src="../Static/img/u.gif">
                </a> |
                <a href="consultaDU.php">
                    <img src="../Static/img/d.png">
                </a>
            </p>

            <p class="parrafo">Bienvenido, administrador. En la parte superior encontrarás las opciones para crear, leer, actualizar y eliminar registros. Usa estas herramientas para gestionar fácilmente los datos de los usuarios y los servicios de la barbería.</p>

            <a href="menuadmin.php" class="enlace">
                <img src="../Static/img/regresar.png">
                <p>Regresar</p>
            </a>

            <picture>
                <img loading="lazy" src="../Static/img/2.jpg" alt="imagen blog"> 
            </picture>
        </div>
    </div>
</article>
