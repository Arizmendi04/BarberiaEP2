<?php include "../Static/connect/db.php" ?>
<?php include '../includes/head.php' ?>

<?php
    if(isset($_GET['id'])){
        $id =$_GET['id'];
        $sql="DELETE FROM SERVICIOS WHERE id=$id;";
        $execute=mysqli_query($conn, $sql);
        if(!$execute){
            die("Eliminacion fallo");
        }
        sleep(3);
        header("Location: consultaDU.php");
    }
?>

<?php include '../includes/footer.php'?>
