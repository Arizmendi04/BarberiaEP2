<?php include "../Static/connect/db.php"; ?>

<?php
    session_start();
    // Verificar si la sesión está activa
    if (!isset($_SESSION['usuario'])) {
        // Si no hay sesión, redirigir al login
        header("Location: ../login.php");
        exit();
    }

    // Obtener los datos del formulario
    $fecha = $_POST['fecha'];
    $hora_inicio = $_POST['hora_inicio'];
    $usuario = $_SESSION['usuario'];  // Usuario autenticado

    // Obtener el ID del usuario a partir del nombre de usuario
    $sql_usuario = "SELECT id FROM usuarios WHERE usuario = '$usuario'";
    $result_usuario = mysqli_query($conn, $sql_usuario);
    if ($row_usuario = mysqli_fetch_assoc($result_usuario)) {
        $id_usuario = $row_usuario['id'];

        // Obtener el ID del horario a partir de la fecha y la hora de inicio
        $sql_horario = "SELECT id FROM horarios WHERE fecha = '$fecha' AND hora_inicio = '$hora_inicio' AND disponible = 1";
        $result_horario = mysqli_query($conn, $sql_horario);

        if (mysqli_num_rows($result_horario) > 0) {
            $row_horario = mysqli_fetch_assoc($result_horario);
            $id_horario = $row_horario['id'];

            // Insertar la cita en la base de datos
            $sql_cita = "INSERT INTO citas (id_usuario, id_horario) VALUES ('$id_usuario', '$id_horario')";

            if (mysqli_query($conn, $sql_cita)) {
                // Actualizar la disponibilidad del horario
                $sql_update_horario = "UPDATE horarios SET disponible = 0 WHERE id = '$id_horario'";
                mysqli_query($conn, $sql_update_horario);

                echo "Cita reservada con éxito.";
                // Redirigir a la página de menú de usuario
                header("Location: usermenu.php");
            } else {
                echo "Error al insertar la cita: " . mysqli_error($conn);
            }
        } else {
            echo "Horario no disponible o no encontrado.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
?>
