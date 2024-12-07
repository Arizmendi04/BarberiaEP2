<?php
require('fpdf/fpdf.php');

// Crear una clase personalizada para el PDF
class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Lista de Usuarios', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'bar7A');
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta a la tabla usuarios
$result = $conn->query("SELECT id, usuario FROM usuarios");

if ($result->num_rows > 0) {
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(30, 10, 'ID', 1, 0, 'C');
    $pdf->Cell(80, 10, 'Usuario', 1, 1, 'C');

    $pdf->SetFont('Arial', '', 10);
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(30, 10, $row['id'], 1, 0, 'C');
        $pdf->Cell(80, 10, $row['usuario'], 1, 1, 'C');
    }
} else {
    $pdf->Cell(0, 10, 'No hay usuarios registrados.', 1, 1, 'C');
}

// Salida del PDF
$pdf->Output();
?>
