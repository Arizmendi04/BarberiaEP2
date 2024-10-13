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

<?php
    if(isset($_GET['id'])){
        
        $ID = $_GET['id'];
        $SQL = "Select * from servicios where id = $ID;";
        $resu = mysqli_query($conn, $SQL);
        if(mysqli_num_rows($resu)==1){
            $row = mysqli_fetch_array($resu);
            $nombre = $row['nombre'];
            $precio = $row['precio'];
            // echo $nombre . " | " . $precio;
        }

    }else{
        echo "No existen registros";
    }

    if(isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $sql = "UPDATE servicios set nombre = '$nombre', precio='$precio' where id=$id;";
        mysqli_query($conn, $sql);
        header("Location:consultaDU.php");
    }

?>

<form action="update.php?id=<?php echo $_GET['id'];?>" method = "POST">
    
    <div class="form_container">
        <label class="formulario_label">Nombre del servicio: 
            <Input type="text" name="nombre" id="nombre" value ="<?php 
            echo $nombre; ?>" class="formulario_input">
        </label>
    </div>

    <div class="form_container">
        <label class="formulario_label">Precio del producto: 
            <Input type="text" name="precio" id="precio" value ="<?php 
            echo $precio; ?>" class="formulario_input">
        </label>
    </div>

    <br><br>

    <button name = "actualizar" class="formulario_btn">Actualizar

    </button>

</form>

<br><br><br>

<a href="consultaDU.php" class="enlace">
  <img src="../Static/img/back.png">
  <p>Regresar</p>
</a>

<?php include '../includes/footer.php'?>
