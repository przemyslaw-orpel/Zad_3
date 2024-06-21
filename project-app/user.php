<?php
// Skrypt obsługujący konto użytkownika
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: loginForm.php');
    exit();
}

echo "Welcome, " . $_SESSION['username'];
?>
