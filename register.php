<?php
session_start(); // Memulai session

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'cbt 5');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses registrasi
if (isset($_POST['register_submit'])) {
    $new_username = $_POST['new_username'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT); // Hash password

    // Query untuk menambahkan pengguna baru
    $stmt = $conn->prepare("INSERT INTO masuk (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $new_username, $new_password);

    // Cek jika berhasil
    if ($stmt->execute()) {
        // Setelah registrasi, arahkan ke halaman login dengan pesan sukses
        $_SESSION['message'] = "Registrasi berhasil! Silakan login."; // Set pesan
        header("Location: login.php"); // Arahkan ke halaman login setelah registrasi
        exit();
    } else {
        echo "<script>alert('Registrasi gagal! Username mungkin sudah digunakan.');</script>";
    }

    // Tutup koneksi
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        /* Gaya CSS untuk tampilan registrasi */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: black; /* Ganti background menjadi hitam */
            color: #fff; /* Warna teks menjadi putih */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: rgba(255, 255, 255, 0.1); /* Latar belakang putih transparan */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            width: 100%;
            opacity: 0; /* Animasi fade in */
            transform: translateY(-20px); /* Animasi masuk dari atas */
            animation: fadeInUp 0.5s forwards; /* Menjalankan animasi */
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            animation: bounceIn 1s; /* Animasi judul */
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.8); /* Latar belakang input menjadi putih transparan */
            color: #000; /* Teks dalam input menjadi hitam */
            transition: border-color 0.3s;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s; /* Transisi warna latar belakang */
        }
        button:hover {
            background-color: #0056b3;
        }

        .input-group {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 7px;
            cursor: pointer;
        }

        /* Animasi */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        .footer {
            text-align: center;
            margin-top: 15px;
            color: rgba(255, 255, 255, 0.8);
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h2>Registrasi</h2>
            <label for="new_username">Username:</label>
            <input type="text" id="new_username" name="new_username" required>
            <label for="new_password">Password:</label>
            <div class="input-group">
                <input type="password" id="new_password" name="new_password" required>
                <span class="toggle-password" onclick="togglePasswordVisibility()">👁️</span>
            </div>
            <button type="submit" name="register_submit">Daftar</button>
        </form>

        <div class="footer">
            <p>Sudah punya akun? <a href="login.php">Login</a></p> <!-- Tautan ke halaman login -->
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordField = document.getElementById("new_password");
            const icon = document.querySelector(".toggle-password");

            // Jika tipe input saat ini adalah password, ubah jadi teks
            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.textContent = "🙈"; // Ubah ikon menjadi mata tertutup
            } else {
                passwordField.type = "password";
                icon.textContent = "👁️"; // Ubah ikon menjadi mata terbuka
            }
        }
    </script>
</body>
</html>
