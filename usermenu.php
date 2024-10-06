<?php include 'includes/header.php'; ?>

<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        $user = $_SESSION['usuario'];
        echo "<h1>Iniciaste sesión como: " . $user . "</h1>";
?>

    <article class="entrada">
        <div class="entrada_contenido">
            <h4 class="no-margin">Barbershop México</h4>
            <a href="admin.php">
                <img src="./Static/img/user.png">
            </a>
            <a href="logout.php">
                <img src="./Static/img/logout.png">
            </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque</p>
        </div>
        <div class="entrada__imagen">
            <picture> 
                <img loading="lazy" src="./Static/img/2.jpg"> 
            </picture> 
        </div>
    </article>  

<?php
    } else {
        echo "sin usuario";
        header("Location: login.php");
        exit();
    }
?>

<?php  include 'includes/footer.php'; ?>
