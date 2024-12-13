<?php  
    include '../includes/head.php';
    session_start();

    if(isset($_SESSION['usuario'])){
        $user = $_SESSION['usuario'];
    } else {
        header("Location: login.php");
        exit(); // Asegura que no se ejecuta el resto del script si redirige
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbershop México</title>
    <link rel="stylesheet" href="../Static/css/styles.css">
    <link rel="stylesheet" href="../Static/css/header.css">
    <link rel="stylesheet" href="../Static/css/index.css">
    
</head>
<body>
    <header>
        <div class="logo">Barberia Calaca</div>
        <nav>
            <ul>
                <li><a href="menuadmin.php">Inicio</a></li>
                <li><a href="#about">Acerca</a></li>
                <li><a href="../logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
            <div>
                  <br>
                  <h1 style="text-align: center"> Opciones de administrador. </h1>
                  <br>
                  <h4 style="text-align: center">Hola! <?php echo $user; ?></h4>
            </div>

            <div class="logo_index">
             <img src="../Static/img/calaca3.png" alt="Descripción de la imagen" class="imagen_index">
            </div>  

            <div class="Enlaces_index">
                  <a href="admin.php" class="enlace">
                    <img src="../Static/img/admin.png" alt="Opciones">
                    <p>Opciones</p>
                </a>

                <a href="../reportes.php" class="enlace">
                    <img src="../Static/img/doc.png" alt="Reportes">
                    <p>Generar reportes</p>
                </a>
                
                <a href="../logout.php" class="enlace">
                    <img src="../Static/img/logout.png" alt="Cerrar sesión">
                    <p>Cerrar sesión</p>
                </a>
            </div>
            <br>

            
    </main>

    <footer class="footer">
        <p>Derechos reservados © Barbería Calaca</p>
    </footer>
</body>
</html>
