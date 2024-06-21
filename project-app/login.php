<?php
require 'config.php';
require 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (login($username, $password)) {
    echo 'Login successful!';
} else {
    echo 'Invalid username or password.';
}
?>
