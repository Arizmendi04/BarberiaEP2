<?php include "Static/connect/db.php" ?>
<?php include 'includes/header.php'?>

    <table class = "table-primary">
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

<?php include 'includes/footer.php'?>