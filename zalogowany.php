<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
        setcookie("last_login", "", time() - 3600, "/"); // Delete the cookie
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania 3 - s7443</title>
    <style>
        .logout {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>

<body>
    <div class="logout">
        <form method="post">
            <input type="submit" name="logout" value="Wyloguj">
        </form>
    </div>
    <h1>Witaj, jesteś zalogowany!</h1>
</body>

</html>