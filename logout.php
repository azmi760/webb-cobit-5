<?php
session_start();
session_destroy(); // Menghancurkan session

// Redirect ke halaman login
header("Location: login.php");
exit();
?>
