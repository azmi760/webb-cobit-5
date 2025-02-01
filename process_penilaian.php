<?php
session_start();

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'cobit 5');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $domain = $_POST['domain'];
    $practice = $_POST['practice'];
    $username = $_SESSION['username'];
    $activity = $_POST['activity']; // Ambil activity yang dipilih
 {
        // Query untuk menyimpan penilaian ke database
        $stmt = $conn->prepare("INSERT INTO nilai (username, domain, practice, activity) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $domain, $practice, $activity);

        if ($stmt->execute()) {
            echo "Penilaian berhasil disimpan!";
        } else {
            echo "Terjadi kesalahan saat menyimpan data: " . $stmt->error;
        }
 }

    // Menutup koneksi
    $stmt->close();
    $conn->close();
}

?>
