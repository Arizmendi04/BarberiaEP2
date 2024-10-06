<?php include "Static/connect/db.php"?>
<?php include "includes/header.php"?>
 
<?php

    session_start();

    $user = $_POST["usuario"];
    $password = $_POST["contrasena"];

    $sql = "Select * from usuarios where usuario = '$user' and contrasena = '$password'";

    $execute = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($execute);

    if(($row["usuario"] == $user) && ($row["contrasena"] == $password)){
        $_SESSION["usuario"] = $user;
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }

?>