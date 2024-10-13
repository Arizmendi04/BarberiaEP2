<?php include '../includes/head.php' ?>
<?php include "../Static/connect/db.php"; ?>

<?php

// Inicializar variables
$fecha = "";
$horas = [];

// Verificar si se ha enviado el primer formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fecha'])) {
    // Obtener la fecha seleccionada
    $fecha = mysqli_real_escape_string($conn, $_POST['fecha']);
    
    // Consulta para obtener las horas disponibles para esa fecha
    $sql = "SELECT * FROM horarios WHERE fecha = '$fecha' AND disponible = 1;";
    $exec = mysqli_query($conn, $sql);

    // Comprobar si hay horarios disponibles
    if (mysqli_num_rows($exec) > 0) {
        while ($rows = mysqli_fetch_assoc($exec)) {
            $horas[] = htmlspecialchars($rows['hora_inicio']); // Guardar las horas en un array
        }
    }
}
?>

<h4>Seleccione el horario disponible para su cita</h4>

<!-- Primer formulario para seleccionar la fecha -->
<form method="POST" action="">
    <label for="fecha" class="formulario_label">Fecha:</label>
    <input type="text" id="fecha" name="fecha" class="formulario_entrada" value="<?php echo htmlspecialchars($fecha); ?>" required><br><br> <!-- Mantener el valor de la fecha -->
    
    <button type="submit" class="formulario_btn">Mostrar Horarios</button>
</form>

<?php if (!empty($horas)): ?>
    <br><br><br>
    <h4>Seleccione la hora de inicio:</h4>
    <!-- Segundo formulario para seleccionar la hora -->
    <form method="POST" action="registrarcita.php">
        <label for="hora_inicio" class="formulario_label">Hora de inicio:</label>
        <select name="hora_inicio" id="hora_inicio" class="formulario_entrada" required>
            <option value="">Seleccione una hora</option>
            <?php foreach ($horas as $hora): ?>
                <option value="<?php echo $hora; ?>"><?php echo $hora; ?></option>
            <?php endforeach; ?>
        </select><br><br>
        
        <input type="hidden" name="fecha" value="<?php echo htmlspecialchars($fecha); ?>"> <!-- Pasar la fecha al siguiente formulario -->
        <button type="submit" class="formulario_btn">Reservar</button>
    </form>
<?php endif; ?>

<!-- Incluir jQuery y jQuery UI para el calendario -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(document).ready(function() {
        // Activar el calendario con jQuery UI
        $("#fecha").datepicker({
            dateFormat: "yy-mm-dd", // Formato compatible con SQL
            minDate: 0 // No permitir fechas pasadas
        });
    });
</script>

<br><br><br>

<a href="usermenu.php" class="enlace">
    <img src="../Static/img/back.png" alt="Regresar">
    <p>Regresar</p>
</a>

<?php include '../includes/footer.php'; ?>
