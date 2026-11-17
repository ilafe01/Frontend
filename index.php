<?php
require_once 'Assets/config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kläduthyrning - Hyr stilrent mode</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

 <header>
    <div class="logo-container">
    <a href="index.php">
      <img src="Assets/Gemini_Generated_Image_spo66wspo66wspo6.jpeg" alt="Logotyp" class="logo">
    </a>
    </div>
    <nav>
        <a href="index.php"><img src="Assets/Gemini_Generated_Image_spo66wspo66wspo6.jpeg" alt="Logo" class="logo"></a>
        <a href="index.php">Hem</a>
        <a href="minabokningar.php">Mina bokningar</a>
        <a href="boka.php">Boka</a>
        <a href="login.php">Logga in</a>
        <a href="signup.php">Sign up</a>
        </nav>
     </header>

<main>
    <section class="hero">
    <h1>Hyr din stil till nästa event/h1>
    <p>Sveriges smidigaste platform för uthyrning av festkläder, kostymer och vardagsmode direkt online.</p>
    <a href="Filer/boka.php" class="btn-primary">Utforska hela utbudet</a>
</section>

<section class="kategorier-sektion">
    <h2>Våra kategorier</h2>
    <p class="sektion-subtitle">Hitta det perfekta plagget för varje tillfälle</p>
    
    <div class="kategorier-grid">
        <!-- Kategori 1: Tröjor -->
         <div class="kategori-kort">
            <h3>Tröjor & Överdelar</h3>
            <p class="kategori-desc">Ett brett utbud fär alla stilar.</p>
            <ul class="plagg-lista">
                <li> Kostymskjortor</li>
                <li> Tröjor & Stickat</li>
                <li> Stilrena T-shirts</li>
                <li> Festtoppar</li>
            </ul>
            <a href="Filer/boka.php?kategori=tröjor" class="btn-card">Visa tröjor</a>
    </div>

     <!-- Kategori 2: Byxor -->
      <div class="kategori-kort">
         <h3>Byxor & Kostymer</h3>
         <p class="kategori-desc">Skräddarsytt och bekvämt.</p>
         <ul class="plagg-lista">
            <li> Kostymbyxor</li>
            <li> Chinos & Vardagsbyxor</li>
            <li> Kostymer (helhetsset)</li>
            <li> Festbyxor</li>
         </ul>
         <a href="Filer/boka.php?kategori=byxor" class="btn-card">Visa byxor</a>
    </div>

     <!-- Kategori 3: Jackor -->
      <div class="kategori-kort">
       <h3>Jackor & Ytterkläder</h3>
       <p class="kategori-desc">Snygga ytterpläder för alla väder.</p>
       <ul class="plagg-lista">
           <li>Kavajer & Blazers</li>
           <li>Rockar & Vinterjackor</li>
           <li>Läderjackor</li>
           <li>Vårjackor</li>
        </ul>
        <a href="Filer/boka.php?kategori=jackor" class="btn-card">Visa jackor</a>
    </div>

     <!-- Kategori 4: Skor -->
      <div class="kategori-kort">
       <h3>Skor & Accessoarer</h3>
       <p class="kategori-desc">Detaljerna som fulländar din outfit.</p>
       <ul class="plagg-lista">
          <li>> Kostymskor & Finskor</li>
          <li> Sneakers</li>
          <li> Slipsar & Flugor</li>
          <li> Växor & Klockor</li>              
        </ul>
        <a href="Filer/boka.php?kategori=skor" class="btn-card">Visa skor</a>
    </div>
            </div>
        </section>
    </main>  

    <footer>
        <p>&copy; 2026 Kläduthyrning. Alla rättigheter förbehållna.</p>
    </footer>

</body>
</html>
            
   