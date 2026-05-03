<?php
require_once 'db.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (?, ?, ?)");
    if ($stmt->execute([$nom, $email, $mot_de_passe])) {
        header('Location: login.php');
        exit;
    } else {
        $message = "Erreur lors de l'inscription.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
            <h1>Inscription</h1>
            <form method="post">
                <label>Nom :</label><br>
                <input type="text" name="nom" required><br>
                <label>Email :</label><br>
                <input type="email" name="email" required><br>
                <label>Mot de passe :</label><br>
                <input type="password" name="mot_de_passe" required><br>
                <button type="submit">S'inscrire</button>
            </form>
            <p><?= $message ?></p>
            <p>Déjà inscrit ? <a href="login.php">Connexion</a></p>
        </section>
    </main>
</body>
</html>