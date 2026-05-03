<?php
session_start();
require_once 'db.php';

$panier = $_SESSION['panier'] ?? [];
$livres = [];
$total = 0;

if (!empty($panier)) {
    $ids = implode(',', array_map('intval', array_keys($panier)));
    $requete = $pdo->query("SELECT * FROM livres WHERE id IN ($ids)");
    $livres = $requete->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Votre panier</title>
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
      <h1>Votre panier</h1>

      <?php if (empty($livres)) : ?>
        <p>Votre panier est vide.</p>
      <?php else : ?>
        <?php foreach ($livres as $livre) :
          $quantite = $panier[$livre['id']];
          $total += $livre['prix'] * $quantite;
        ?>
          <div>
            <h3><?= htmlspecialchars($livre['titre']) ?></h3>
            <p>Quantité: <?= $quantite ?> — Prix unitaire: <?= number_format($livre['prix'], 2) ?> €</p>
            <form method="post" action="retirer_du_panier.php">
              <input type="hidden" name="livre_id" value="<?= $livre['id'] ?>">
              <button type="submit">Retirer</button>
            </form>
          </div>
          <hr>
        <?php endforeach; ?>

        <h2>Total: <?= number_format($total, 2) ?> €</h2>
        <form action="confirmation_achat.php" method="post">
          <button type="submit">Valider l'achat</button>
        </form>
      <?php endif; ?>
    </section>
  </main>
</body>
</html>