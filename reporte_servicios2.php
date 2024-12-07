<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Encabezados
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Usuario');

// Estilo de bordes
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
        ],
    ],
];

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'bar7A');
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta a la tabla usuarios
$result = $conn->query("SELECT id, usuario FROM usuarios");
if ($result->num_rows > 0) {
    $rowNumber = 2;
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue("A$rowNumber", $row['id']);
        $sheet->setCellValue("B$rowNumber", $row['usuario']);
        $rowNumber++;
    }
}

// Aplicar bordes a todas las celdas con datos
$lastRow = $sheet->getHighestRow();
$sheet->getStyle("A1:B$lastRow")->applyFromArray($styleArray);

// Ajustar automáticamente el ancho de las columnas
foreach (range('A', 'B') as $columnID) {
    $sheet->getColumnDimension($columnID)->setAutoSize(true);
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="reporte_usuarios.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>
