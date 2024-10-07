<?php include "Static/connect/db.php"; ?>
<?php include 'includes/header.php'; ?>

<?php 
    require 'vendor/autoload.php'; 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use Dotenv\Dotenv; 

    // Cargar las variables de entorno
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $nombreusuario = $_POST['nameuser'];
        $contra = $_POST['pass'];
        $correo = $_POST['correo'];

        // Inserción en la base de datos
        $sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$nombreusuario', '$contra');";
        $execute = mysqli_query($conn, $sql);

        if ($execute) {
            $mail = new PHPMailer(true);
            try {
                // Configuración del servidor
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Establecer el servidor SMTP
                $mail->SMTPAuth = true;
                $mail->Username = $_ENV['SMTP_USERNAME']; // Usar variable de entorno
                $mail->Password = $_ENV['SMTP_PASSWORD']; // Usar variable de entorno
                $mail->SMTPSecure = 'tls'; // Cambiar a 'ssl' si usas el puerto 465
                $mail->Port = 587; // Cambiar a 465 si usas 'ssl'

                // Destinatarios
                $mail->setFrom('amjo220898@upemor.edu.mx', 'Barbershop'); // Remitente
                $mail->addAddress($correo); // Agregar el correo del usuario como destinatario
                
                // Contenido del correo
                $mail->isHTML(false);
                $mail->Subject = "Registro de nuevo usuario";
                $mail->Body = "Usuario: $nombreusuario\nContraseña: $contra\n";

                // Enviar correo
                $mail->send();
?>
                <p class="parrafo">Registro exitoso, se te ha enviado un correo electronico con las credenciales ingresadas</p>
<?php
            } catch (Exception $e) {
                echo "Error al enviar el correo: {$mail->ErrorInfo}";
            }
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($conn);
        }
    }
?>

<br><br><br>

<a href="index.php" class="enlace">
    <img src="./Static/img/back.png">
    <p>Regresar</p>
</a>

<?php include 'includes/footer.php'; ?>
