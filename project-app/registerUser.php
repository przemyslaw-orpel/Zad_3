<?php
require 'config.php';
require 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password_strength = SPRHASLO($password);

if ($password_strength !== 'OK') {
    echo "Password strength: $password_strength";
    exit();
}

// Zakodowanie hasła przed zapisem do pliku
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$user_data = [
    'username' => $username,
    'password' => $hashed_password
];

file_put_contents('users.txt', json_encode($user_data) . PHP_EOL, FILE_APPEND);
echo "Registration successful!";
?>
