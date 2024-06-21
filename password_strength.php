<?php
function SPRHASLO($password) {
    $strength = "OK";
    $length = strlen($password);

    if ($length < 5) {
        return "Hasło słabe";
    } elseif ($length < 9) {
        $strength = "Hasło średnie";
    }

    if (!preg_match('/[0-9]/', $password)) {
        return "Hasło słabe";
    }
    if (!preg_match('/[A-Z]/', $password)) {
        return "Hasło słabe";
    }
    if (!preg_match('/[a-z]/', $password)) {
        return "Hasło słabe";
    }
    if (!preg_match('/[\W_]/', $password)) {
        return "Hasło słabe";
    }

    return $strength;
}

$password = "ExamplePassword123!";
echo SPRHASLO($password); 
?>
