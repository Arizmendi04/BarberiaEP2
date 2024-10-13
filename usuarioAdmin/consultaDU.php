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

    <table class = "table-info">
        <thead>
            <TR>
                <TH>Id</TH>
                <TH>Servicio</TH>
                <TH>Costo</TH>
                <TH>Eliminar</TH>
                <TH>Actualizar</TH>
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
            <th>
                <a href="delete.php?id=<?php echo $rows['id']?>">
                    <img src="../Static/img/iconobasura.svg"></p>
                </a>
            </th>
            
            <th>
                <a href="update.php?id=<?php echo $rows['id']?>">
                <img src="../Static/img/iconoedit.png">
                </a>
            </th>
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