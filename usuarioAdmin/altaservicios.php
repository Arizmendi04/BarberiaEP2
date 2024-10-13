<?php include "../Static/connect/db.php" ?>
<?php include '../includes/header.php'?>

<?php
    session_start();
    // Verificar si la sesión está activa
    if (!isset($_SESSION['usuario'])) {
        // Si no hay sesión, redirigir al login
        header("Location: ../login.php");
        exit();
    }
?>

<?php 

    $nombre= $_REQUEST['nombre'];
    $precio= $_REQUEST['precio'];
    $sql="INSERT INTO servicios (nombre, precio)
    VALUES('$nombre', $precio);";
    $execute=mysqli_query($conn, $sql);
    sleep(3);
    header("Location: admin.php");

?>


<?php include '../includes/footer.php'?>