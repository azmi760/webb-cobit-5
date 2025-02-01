<?php
// Konfigurasi Database
$host = "localhost";  // atau '127.0.0.1'
$user = "root";       // Username MySQL
$password = "";       // Password MySQL (kosongkan jika tidak ada)
$dbname = "cobit";    // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
