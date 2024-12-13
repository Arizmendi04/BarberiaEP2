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

<link rel="stylesheet" href="../Static/css/read.css">

    <table class = "table-primary centered-table">
        <thead>
            <TR>
                <TH>Id</TH>
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
            <th><?php echo $rows['id']; ?></th>
            <th><?php echo $rows['nombre']; ?></th>
            <th><?php echo $rows['precio']; ?></th>
        </tr>

<?php    
    }
?>

    </table>

<br><br><br>

<a href="admin.php" class="enlace">
    <img src="../Static/img/back.png">
    <p>Regresar</p>
</a>

<?php include '../includes/footer.php'?>