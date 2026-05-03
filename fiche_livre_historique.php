<?php
// fiche_livre_historique.php
require_once 'db.php'; // Connexion à la base de données

$requete = $pdo->prepare("SELECT * FROM livres WHERE categorie = 'Historique'");
$requete->execute();
$livres = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livres Historiques</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiche livre - Non-fiction | ASM BOOKSHOP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="main-header">
    <img src="img/logo.png" alt="Logo gauche" class="logo">
    <h1 class="site-title">ASM BOOKSHOP</h1>
    <nav class="main-nav">
        
        <a href="index.html">Accueil</a>
        <a href="fiche_livre_historique.php">
    <button class="active">Historique</button>
</a>
      <a href="catalogue.html" class="active">Catalogue</a>
      <a href="apropos.html">À propos</a>
      <a href="index.html">Accueil</a>
      <a href="catalogue.html">Catalogue</a>
      <a href="apropos.html">À propos</a>
    </nav>
    <img src="img/logo.png" alt="Logo droite" class="logo">
  </header>
</head>
<body>
    <h1>Livres Historiques</h1>
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
  <main class="fiche-container">
    <button class="panier-btn">🛒 Ajouter au panier</button>

    <section class="livres">
      <!-- Livre 1 -->
      <div class="fiche-livre">
        <img src="img/livre1.png" alt="Penser à rebours" class="livre-img">
        <div class="livre-details">
          <h3>Penser à rebours<br><small>par Julien Barès</small></h3>
          <span class="genre-badge">Philosophie</span>
          <p class="resume">
            <strong>Résumé :</strong><br>
            Un essai percutant qui remet en question notre rapport au temps, à la productivité et à l'ego.
            Une plongée philosophique vers une vie plus lente, plus humaine.
          </p>
          <div class="prix-action">
            <span class="prix">16,00€</span>
            <button class="acheter-btn">ACHETER</button>
          </div>
        </div>
      </div>

      <!-- Livre 2 <a href="index.html">Accueil</a>
      <a href="catalogue.html">Catalogue</a>
      <a href="apropos.html">À propos</a>
       <section class="livres">
      <! Livre 1 -->
      <div class="fiche-livre">
        <img src="img/livre1.png" alt="Penser à rebours" class="livre-img">
        <div class="livre-details">
          <h3>Reines de sang<br><small>par Philippa Gregory</small></h3>
          <span class="genre-badge">Philosophie</span>
          <p class="resume">
            <strong>Résumé :</strong><br>
            Un essai percutant qui remet en question notre rapport au temps, à la productivité et à l'ego.
            Une plongée philosophique vers une vie plus lente, plus humaine.
          </p>
          <div class="prix-action">
            <span class="prix">16,00€</span>
            <button class="acheter-btn">ACHETER</button>
          </div>
        </div>
      </div>--/ 
      <div class="fiche-livre">
        <img src="img/livre2.png" alt="A travers les souffles" class="livre-img">
        <div class="livre-details">
          <h3>À travers les souffles<br><small>par Lina Serrano</small></h3>
          <span class="genre-badge">Poésie</span>
          <p class="resume">
            <strong>Résumé :</strong><br>
            Un recueil de poèmes courts sur l'absence, la tendresse et la renaissance.
            Chaque page est une respiration, une émotion...
          </p>
          <div class="prix-action">
            <span class="prix">9,20€</span>
            <button class="acheter-btn">ACHETER</button>
        </div>
        </div>
      </div>
    </section>

    <div class="retour-catalogue">
      <a href="catalogue.html" class="catalogue-btn">Retour au Catalogue</a>
    </div>
  </main>
</body>
</html>
