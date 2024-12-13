<?php include "../Static/connect/db.php" ?>
<?php include '../includes/head.php'?>

<?php
    session_start();
    // Verificar si la sesión está activa
    if (!isset($_SESSION['usuario'])) {
        // Si no hay sesión, redirigir al login
        header("Location: ../login.php");
        exit();
    }
?>

<link rel="stylesheet" href="../Static/css/horarios.css">

    <h2>Los horarios disponibles son: </h2>

    <table class = "table-primary centered-table">
        <thead>
            <TR>
                <TH>Fecha</TH>
                <TH>Hora inicio</TH>
                <TH>Hora fin</TH>
            </TR>
        </thead>

<?php

    $sql = "select * from horarios where disponible = 1;";
    $exec = mysqli_query($conn, $sql);

    // Ciclo para recorrer fila por fila los resultados
    while($rows=mysqli_fetch_array($exec)){
?>    
    
        <tr>
            <th><?php echo $rows['fecha']; ?></th>
            <th><?php echo $rows['hora_inicio']; ?></th>
            <th><?php echo $rows['hora_fin']; ?></th>
        </tr>

<?php    
    }
?>

    </table>

<br><br><br>

<a href="usermenu.php" class="enlace">
    <img src="../Static/img/back.png">
    <p>Regresar</p>
</a>

<?php include '../includes/footer.php'?>