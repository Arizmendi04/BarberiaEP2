<?php  include 'includes/header.php'?>

<?php
      session_start();
      if(isset($_SESSION['usuario'])){
            $user = $_SESSION['usuario'];
?>
            <article class="entrada">
                  <div class="entrada_contenido">
                        <h4 class="no-margin">Barbershop México</h4>

                        <?php
                              echo "<h4>Hola " . $user . "</h4>"; 
                        ?>

                        <a href="admin.php" class="enlace">
                              <img src="./Static/img/admin.png">
                              <p>Opciones</p>
                        </a>

                        <a href="reportes.php" class="enlace">
                              <img src="./Static/img/doc.png">
                              <p>Generar reportes</p>
                        </a>
                        
                        <a href="logout.php" class="enlace">
                              <img src="./Static/img/logout.png">
                              <p>Cerrar sesión</p>
                        </a>

                        <p class="parrafo">¡Bienvenido de nuevo, <?php echo $user; ?>! Nos alegra tenerte con nosotros en Barbershop México. Estamos comprometidos a ofrecerte la mejor experiencia en estilo y cuidado personal. Explora nuestras opciones, ajusta tu estilo y deja que nuestros expertos cuiden de ti. ¡Gracias por elegirnos, y disfruta de tu visita!</p>
                  </div>

                  <div class="entrada__imagen">
                        <picture> 
                              <img loading="lazy" src="./Static/img/2.jpg"> 
                        </picture> 
                  </div>

            </article>          
<?php
      }else{
            header("Location: login.php");
      }
?>
        
<?php  include 'includes/footer.php'; ?>