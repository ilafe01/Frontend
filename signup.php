<?php
require_once 'assets/functions.php';
session_start();

$error=false;

if(isset($_POST['submit'])) {
    if(isset($_POST['username'])
        && isset($_POST['name'])
        && isset($_POST['email'])
        && isset($_POST['password'])){

        $username = filter_input(INPUT_POST, "username" , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $name = filter_input(INPUT_POST, "name" , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email" , FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, "password" , FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                  

        if(addUser($felt)){
            $_SESSION['username'] = $felt['username'];
            $_SESSION['name'] = $felt['name'];
            $_SESSION['email'] = $felt['email'];
            $_SESSION['password'] = $felt['password'];
            header("Location: index.php");
       }
       else {
        $error=true;
        } 
}else {
        $error=true;

       }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($error)
 echo "<p>Kontrollera dina uppgifter</p>";
 ?>
  <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" required>
    <input type="submit" name="submit" value="Login">
</form>
<p><a href ="login.php">Har du redan ett konto?</a></p>

</body>
</html>