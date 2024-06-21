<?php
    $login_ok = "admin";
    $password_ok = md5("admin");

    $info = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $login = isset($_POST['login']) ? $_POST['login'] : "";
        $password = isset($_POST['haslo']) ? $_POST['haslo'] : "";
        $hashed_password = md5($password);

        if ($login == $login_ok && $hashed_password == $password_ok) {
            setcookie("last_login", $login, time() + (86400 * 30), "/");
            header("Location: zalogowany.php");
            exit();
        } else {
            $info = 'Nieprawidłowy login lub hasło';
        }
    }

    if (!empty($info)) {
        echo "<p>$info</p>";
    }

    $last_login = isset($_COOKIE['last_login']) ? $_COOKIE['last_login'] : '';
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania 3 - s7443</title>
    <style>
    </style>
</head>

<body>
    <div>
        <h1>5. Formularz logowania</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="login">Login:</label><br>
            <input type="text" id="login" name="login" value="<?php echo htmlspecialchars($last_login); ?>" required><br><br>
            <label for="haslo">Hasło:</label><br>
            <input type="password" id="haslo" name="haslo" required><br><br>
            <input type="submit" value="Zaloguj">
        </form>
    </div>
</body>

</html>