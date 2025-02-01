<?php
session_start(); // Memulai session

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'cbt 5');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses login
if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memilih pengguna berdasarkan username
    $stmt = $conn->prepare("SELECT * FROM masuk WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah pengguna ditemukan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifikasi password yang diinput dengan hash di database
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username; // Set session username
            header("Location: index.php"); // Arahkan ke halaman utama
            exit();
        } else {
            echo "<script>alert('Password salah!');</script>";
        }
    } else {
        echo "<script>alert('Pengguna tidak ditemukan!');</script>";
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
    <title>Login Page</title>
    <style>
        /* Gaya CSS untuk tampilan login */
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
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <div class="input-group">
                <input type="password" id="password" name="password" required>
                <span class="toggle-password" onclick="togglePasswordVisibility()">👁️</span>
            </div>
            <button type="submit" name="login_submit">Login</button>
        </form>

        <div class="footer">
            <p>Belum punya akun? <a href="register.php">Daftar</a></p> <!-- Tautan ke halaman registrasi -->
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordField = document.getElementById("password");
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
