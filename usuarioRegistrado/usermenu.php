<?php include '../includes/head.php'; ?>

<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        $user = $_SESSION['usuario'];
?>

    <article class="entrada">
        <div class="entrada_contenido">
            <h4 class="no-margin">Barbershop México</h4>
            <?php echo "<h4>Hola " . $user . "</h4> <br><br>"; ?>
            <a href="registrarhorario.php" class="enlace">
                <img src="../Static/img/registrarservicio.png">
                <p>Solicitar servicio</p>
            </a>
            <a href="consultarhorario.php" class="enlace">
                <img src="../Static/img/consultarhorarios.png">
                <p>Consultar servicios disponibles</p>
            </a>
            <a href="../logout.php" class="enlace">
                <img src="../Static/img/logout.png">
                <p>Cerrar sesión</p>
            </a>
            <p class="parrafo">Ahora que formas parte de nuestra comunidad, puedes acceder a los servicios exclusivos y agendar tus citas según los horarios disponibles. Nos complace tenerte con nosotros, y estamos listos para ofrecerte la mejor experiencia de barbería.</p>
        </div>
        <div class="entrada__imagen">
            <picture> 
                <img loading="lazy" src="../Static/img/2.jpg"> 
            </picture> 
        </div>
    </article>  

<?php
    } else {
        echo "sin usuario";
        header("Location: ../login.php");
        exit();
    }
?>

<?php  include '../includes/footer.php'; ?>
