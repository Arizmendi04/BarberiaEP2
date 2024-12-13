<?php  include 'includes/header.php'?>

<?php
      session_start();
      if(isset($_SESSION['usuario'])){
            $user = $_SESSION['usuario'];
?>

<link rel="stylesheet" href="Static/css/reportes.css">

            <article class="entrada">
                  <div class="entrada_contenido">
                        <h4 class="no-margin">Barbershop México</h4>

                        <?php
                              echo "<h4>Hola " . $user . "</h4>"; 
                        ?>

                        <a href="generar_pdf.php" class="enlace">
                              <img src="./Static/img/pdf.png">
                              <p>Reporte Numeros</p>
                        </a>

                        <a href="generar_pdf2.php" class="enlace">
                              <img src="./Static/img/pdf.png">
                              <p>Reporte lista de usuarios</p>
                        </a>

                        <a href="reporte_servicios.php" class="enlace">
                              <img src="./Static/img/excel.png">
                              <p>Reporte Excel Servicios</p>
                        </a>

                        <a href="reporte_servicios2.php" class="enlace">
                              <img src="./Static/img/excel.png">
                              <p>Reporte Excel Usuarios</p>
                        </a>
                        
                        <a href="logout.php" class="enlace">
                              <img src="./Static/img/logout.png">
                              <p>Cerrar sesión</p>
                        </a>

                        <p class="parrafo">Selecciona un tipo de reporte y  haz click</p>
                  </div>

                  <div class="entrada__imagen">
                        <picture> 
                              <img loading="lazy" src="./Static/img/calaca2.png"> 
                        </picture> 
                  </div>

            </article>          
<?php
      }else{
            header("Location: login.php");
      }
?>
        
<?php  include 'includes/footer.php'; ?>