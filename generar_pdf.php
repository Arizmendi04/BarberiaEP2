<?php
require('fpdf/fpdf.php');
require('static/connect/db.php'); // Archivo donde configuras la conexión a la base de datos

// Crear una clase personalizada para el PDF
class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Reporte de BarberShop', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Crear instancia de la clase PDF
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'bar7A');
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultas
$totalUsuarios = $conn->query("SELECT COUNT(*) AS total_usuarios FROM usuarios")->fetch_assoc()['total_usuarios'];
$totalServicios = $conn->query("SELECT COUNT(*) AS total_servicios FROM servicios")->fetch_assoc()['total_servicios'];
$totalCitas = $conn->query("SELECT COUNT(*) AS total_citas FROM citas")->fetch_assoc()['total_citas'];

// Agregar contenido al PDF
$pdf->Cell(0, 10, "Numero de Usuarios: $totalUsuarios", 0, 1);
$pdf->Cell(0, 10, "Numero de Servicios: $totalServicios", 0, 1);
$pdf->Cell(0, 10, "Numero de Citas: $totalCitas", 0, 1);

// Salida del PDF
$pdf->Output();
?>
