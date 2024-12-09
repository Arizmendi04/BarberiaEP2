<?php
// Incluir conexión a la base de datos
include "../Static/connect/db.php";

// Obtener los datos de la base de datos
function obtenerServicios($conn) {
    $sql = "SELECT * FROM servicios;";
    $exec = mysqli_query($conn, $sql);
    $servicios = [];

    // Guardar resultados en un arreglo
    while ($row = mysqli_fetch_array($exec)) {
        $servicios[] = $row;
    }

    return $servicios;
}

// Obtener los servicios
$servicios = obtenerServicios($conn);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver servicios</title>
    
    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Static/css/styles.css">
    <link rel="stylesheet" href="../Static/css/header.css">
</head>

<body class="bg-light">
    <header>
        <div class="logo">Calaca Barbera</div>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="#about">Acerca</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1 style="text-align: center; margin-top: 10px">Servicios Disponibles</h1>

        <div class="parent">
            <div style="margin-left: 10px">
                <!-- Tabla estilizada con Bootstrap -->
                <table class="table table-bordered table-striped table-hover mt-4">
                    <thead class="table-dark">
                        <tr>
                            <th>Servicio</th>
                            <th>Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($servicios as $servicio): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($servicio['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($servicio['precio']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div style="">
                <img src="../Static/img/calaca1.png" >
            </div>
        </div>

        <p style="text-align: center">
            ¿Te interesa lo que estás viendo? 
            <a href="../usuarioRegistrado/registro.php" class="text-primary">Regístrate aquí</a> y agenda una cita.
        </p>

        <p style="text-align: center">
            ¿Te interesa lo que estás viendo? 
            <a href="../usuarioRegistrado/registro.php" class="text-primary">Regístrate aquí</a> y agenda una cita.
        </p>

    </main>

    <footer class="footer">
        <p>Derechos reservados © Barbería Calaca</p>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
