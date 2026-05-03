<?php
session_start();
require_once 'db.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();

    if ($utilisateur && password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
        $_SESSION['utilisateur'] = $utilisateur;
        header('Location: catalogue.php');
        exit;
    } else {
        $message = "Identifiants invalides.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
            <h1>Connexion</h1>
            <form method="post">
                <label>Email :</label><br>
                <input type="email" name="email" required><br>
                <label>Mot de passe :</label><br>
                <input type="password" name="mot_de_passe" required><br>
                <button type="submit">Se connecter</button>
            </form>
            <p><?= $message ?></p>
            <p>Pas encore inscrit ? <a href="register.php">Créer un compte</a></p>
        </section>
    </main>
</body>
</html>