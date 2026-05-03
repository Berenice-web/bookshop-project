<?php
// confirmation_achat.php
session_start();
$_SESSION['panier'] = [];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'achat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="main-header">
        <img src="img/logo.png" alt="Logo gauche" class="logo">
        <h1 class="site-title">ASM BOOKSHOP</h1>
        <nav class="main-nav">
            <a href="index.html">Accueil</a>
            <a href="catalogue.html">Catalogue</a>
            <a href="apropos.html">À propos</a>
        </nav>
        <img src="img/logo.png" alt="Logo droite" class="logo">
    </header>

    <main class="home-content">
        <section class="intro">
            <h1>Achat confirmé !</h1>
            <p>Merci pour votre commande.</p>
            <p>Vous recevrez un email de confirmation sous peu.</p>
            <a href="catalogue.php" class="btn">Retour au catalogue</a>
        </section>
    </main>
</body>
</html>