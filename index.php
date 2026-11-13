<?php
require_once 'Assets/config/db.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kläduthyrning</title>
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>

<header>
    <div> class="logo">Logo</div>
    <nav>
        <a href="index.php">Hem</a>
        <a href="minabokningar.php">Mina bokningar</a>
        <a href="boka.php">Boka</a>
        <a href="login.php">Logga in</a>
        <a href="signup.php">Sign up</a>
</nav>
</header>

<main>
    <section class="hero"
    <h1>Välkommen till Sveriges största kläduthyrning</h1>
    <p>Hyr festkläder, kostymer och mycket mer direkt online!</p>

    <div class="kläder-preview">
    <div class="plagg-kort">
        <h3>Klänning</h3>
        <p>Elegant klänning för alla tillfällen!</p>
</div>
<div class="plagg-kort">
    <h3>Jacka</h3>
    <p>Snygg jacka för alla väder!</p>
</div>
</div>


<a href="Filer/boka.php" class="btn">Boka kläder</a>

</section>

</main>  
    
</body>
</html>