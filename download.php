<?php
require('fpdf.php');

// Pastikan $activities terisi
if (empty($activities)) {
    echo "<p>Tidak ada aktivitas untuk domain dan practice yang dipilih.</p>";
    exit;
}

// Simulasi data hasil input pengguna
$username = $_SESSION['username'] ?? 'guest';
$domain = 'Contoh Domain'; // Ganti dengan data domain
$practice = 'Contoh Practice'; // Ganti dengan data practice
$average_rating = 3.5; // Contoh rata-rata
$ratings = [
    ['Activity 1', 'Deskripsi Activity 1', 5],
    ['Activity 2', 'Deskripsi Activity 2', 4],
    ['Activity 3', 'Deskripsi Activity 3', 3],
    // Tambahkan aktivitas lainnya...
];

// Inisialisasi PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Judul
$pdf->Cell(0, 10, 'Hasil Input Maturity Level', 0, 1, 'C');
$pdf->Ln(10);

// Informasi Umum
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, "Username: $username", 0, 1);
$pdf->Cell(0, 10, "Domain: $domain", 0, 1);
$pdf->Cell(0, 10, "Practice: $practice", 0, 1);
$pdf->Cell(0, 10, "Rata-rata Maturity Level: " . number_format($average_rating, 2), 0, 1);
$pdf->Ln(10);

// Tabel Aktivitas
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 10, 'Activity Code', 1);
$pdf->Cell(100, 10, 'Description', 1);
$pdf->Cell(30, 10, 'Rating', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 12);
foreach ($ratings as $activity) {
    $pdf->Cell(50, 10, $activity[0], 1);
    $pdf->Cell(100, 10, $activity[1], 1);
    $pdf->Cell(30, 10, $activity[2], 1);
    $pdf->Ln();
}

// Output PDF
$pdf->Output('D', 'Hasil_Input_Maturity_Level.pdf'); // Mengunduh file PDF
?>