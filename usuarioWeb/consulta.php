<?php include "../Static/connect/db.php" ?>
<?php include '../includes/header.php'?>

<!-- Agregar estilo para centrar la tabla -->
<style>
    .centered-table {
        margin: 0 auto; /* Centra la tabla horizontalmente */
        text-align: center; /* Alinea el contenido de la tabla al centro */
    }
</style>

<link rel="stylesheet" href="../Static/css/app.css">

    <table class = "table-primary centered-table">
        <thead>
            <TR>
                <TH>Servicio</TH>
                <TH>Costo</TH>
            </TR>
        </thead>

<?php

    $sql = "select * from servicios;";
    $exec = mysqli_query($conn, $sql);

    // Ciclo para recorrer fila por fila los resultados
    while($rows=mysqli_fetch_array($exec)){
?>    
    
        <tr>
            <th><?php echo $rows['nombre']; ?></th>
            <th><?php echo $rows['precio']; ?></th>
        </tr>

<?php    
    }
?>

    </table>

<br><br><br>

<p>¿Te interesa lo que estás viendo? <a href="../usuarioRegistrado/registro.php" style="color:blue;">regístrate aquí</a> y agenda una cita.</p>

<a href="../index.php" class="enlace">
    <img src="../Static/img/back.png">
    <p>Regresar</p>
</a>

<?php include '../includes/footer.php'?>