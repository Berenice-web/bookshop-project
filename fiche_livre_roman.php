<?php
// fiche_livre_roman.php
require_once 'db.php';

$requete = $pdo->prepare("SELECT * FROM livres WHERE categorie = 'Roman'");
$requete->execute();
$livres = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Romans</title>
</head>
<body>
    <h1>Romans</h1>
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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livres Romantiques</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiche livre - romances | ASM BOOKSHOP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="main-header">
    <img src="img/logo.png" alt="Logo gauche" class="logo">
    <h1 class="site-title">ASM BOOKSHOP</h1>
    <nav class="main-nav">
        
        <a href="index.html">Accueil</a>
        <a href="fiche_livre_roman.php">
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
    <h1>Livres Romantiques</h1>
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
          <h3>Ce que murmure la pluie<br><small>Anais Corbin</small></h3>
          <span class="genre-badge">Romance</span>
          <p class="resume">
            <strong>Résumé :</strong><br>A Kyoto, deux ames solitaires se croisent sous des parapluies. Une romance délicate tissée de silence, de poésie et de regards.
          </p>
          <div class="prix-action">
            <span class="prix">10,50€</span>
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
          <h3>Un été à Capri<br><small>par Theo Rives</small></h3>
          <span class="genre-badge">Romances</span>
          <p class="resume">
            <strong>Résumé :</strong><br>Emma part seule à Capri pour fuir une rupture. Elle y rencontre un photographe italien qui va changer son regard sur....
          </p>
          <div class="prix-action">
            <span class="prix">11,90€</span>
            <button class="acheter-btn">ACHETER</button>
          </div>
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

</html>