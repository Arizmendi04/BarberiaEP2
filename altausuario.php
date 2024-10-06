<?php include "Static/connect/db.php" ?>
<?php include 'includes/header.php'?>

<?php 

    $nombreusuario= $_REQUEST['nameuser'];
    $contra= $_REQUEST['pass'];
    $email = $_REQUEST['correo'];
    $sql="INSERT INTO usuarios (usuario, contrasena)
    VALUES('$nombreusuario', $contra);";
    $execute=mysqli_query($conn, $sql);

    sleep(3);
    header("Location: index.php");

?>


<?php include 'includes/footer.php'?>