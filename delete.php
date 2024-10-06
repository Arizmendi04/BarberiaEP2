<?php include "Static/connect/db.php" ?>
<?php include 'includes/header.php' ?>

<?php
    if(isset($_GET['id'])){
        $id =$_GET['id'];
        $sql="DELETE FROM SERVICIOS WHERE id=$id;";
        $execute=mysqli_query($conn, $sql);
        if(!$execute){
            die("Eliminacion fallo");
        }
        sleep(3);
        header("Location: admin.php");
    }
?>

<?php include 'includes/footer.php'?>
