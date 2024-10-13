<?php include "../Static/connect/db.php"; ?>

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
    // Obtener los datos del formulario
    $fecha = $_POST['fecha'];
    $hora_inicio = $_POST['hora_inicio'];

    // Actualizar la base de datos para marcar el horario como no disponible
    $sql = "UPDATE horarios SET disponible = 0 WHERE fecha = '$fecha' AND hora_inicio = '$hora_inicio'";

    if (mysqli_query($conn, $sql)) {
        echo "Reserva realizada con éxito.";
        // Redirigir de vuelta a la página de horarios disponibles
        header("Location: usermenu.php");
    } else {
        echo "Error al realizar la reserva: " . mysqli_error($conn);
    }

?>
