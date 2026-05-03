<?php
// fiche_livre_publics.php
require_once 'db.php';

$requete = $pdo->prepare("SELECT * FROM livres WHERE categorie = 'Publics spécifiques'");
$requete->execute();
$livres = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livres pour Publics spécifiques</title>
</head>
<body>
    <h1>Livres pour Publics spécifiques</h1>
    <?php foreach ($livres as $livre): ?>
        <div>
            <h3><?= htmlspecialchars($livre['titre']) ?></h3>
            <p><strong>Auteur:</strong> <?= htmlspecialchars($livre['auteur']) ?></p>
            <p><strong>Prix:</strong> <?= number_format($livre['prix'], 2) ?> €</p>
            <form method="post" action="ajouter_panier.php">
                <input type="hidden" name="livre_id" value="<?= $livre['id'] ?>">
                <button type="submit">Ajouter au panier</button>
            </form>
        </div>
        <hr>
    <?php endforeach; ?>
</body>
</html>