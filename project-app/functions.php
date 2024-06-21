<?php
function login($username, $password) {
    $stored_username = 'admin';
    $stored_password = '$2y$10$trUNBPf3Q9G8.5RU1OtDMe9FZc5Fi/LQ5u/.F9lJu4rF3X8jHSDUO'; // Zakodowane hasło do porównania
    if ($username === $stored_username && password_verify($password, $stored_password)) {
        return true;
    } else {
        return false;
    }
}

function SPRHASLO($password) {
    if (strlen($password) < 4) return 'Hasło słabe';
    if (strlen($password) < 8) return 'Hasło średnie';
    if (!preg_match('/[0-9]/', $password)) return 'Hasło słabe';
    if (!preg_match('/[A-Z]/', $password)) return 'Hasło słabe';
    if (!preg_match('/[a-z]/', $password)) return 'Hasło słabe';
    if (!preg_match('/[\W_]/', $password)) return 'Hasło słabe';
    return 'OK';
}
?>
