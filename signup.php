<?php
require_once 'Assets/functions.php';
session_start();

$error = false;

if (isset($_POST['submit'])) {
    if (
        !empty($_POST['name']) &&
        !empty($_POST['email']) &&
        !empty($_POST['password'])
    ) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '';
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];

        if ($email) {
            $felt = [
                'name' => $name,
                'adress' => $adress,
                'email' => $email,
                'password' => $password,
            ];

            if (addUser($felt)) {
                $_SESSION['name'] = $name;
                $_SESSION['adress'] = $adress;
                $_SESSION['email'] = $email;
                header('Location: index.php');
                exit;
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skapa konto</title>
</head>
<body>
    <?php if ($error): ?>
        <p>Kontrollera dina uppgifter (e-postadressen kan redan vara registrerad).</p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="name">Namn:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="adress">Adress:</label>
        <input type="text" id="adress" name="adress">
        <br>
        <label for="email">E-post:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Lösenord:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" name="submit" value="Skapa konto">
    </form>

    <p><a href="login.php">Har du redan ett konto?</a></p>
</body>
</html>