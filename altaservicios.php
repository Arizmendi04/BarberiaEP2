<?php include "Static/connect/db.php" ?>
<?php include 'includes/header.php'?>

<?php 

    $nombre= $_REQUEST['nombre'];
    $precio= $_REQUEST['precio'];
    $sql="INSERT INTO servicios (nombre, precio)
    VALUES('$nombre', $precio);";
    $execute=mysqli_query($conn, $sql);
    echo"<CENTER><H2>DATOS INSERTADOS</H2></CENTER>";
    sleep(3);
    header("Location: index.php");

?>


<?php include 'includes/footer.php'?>