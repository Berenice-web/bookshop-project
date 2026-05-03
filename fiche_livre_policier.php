<?php
// fiche_livre_policier.php
require_once 'db.php';

$requete = $pdo->prepare("SELECT * FROM livres WHERE categorie = 'Policier'");
$requete->execute();
$livres = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livres Policier</title>
</head>
<body>
    <h1>Livres Policier</h1>
    <?php foreach ($livres as $livre): ?>
        <div>
            <h3><?= htmlspecialchars($livre['titre']) ?></h3>
            <p><strong>Auteur:</strong> <?= htmlspecialchars($livre['auteur']) ?></p>
            <p><strong>Prix:</strong> <?= number_format($livre['prix'], 2) ?> €</p>
            <form method="post" action="ajouter_panier.php">
                <input type="hidden" name="livre_id" value="<?= $livre['id'] ?>">
                <button type="submit">Ajouter au panier</button>
                <?php
// fiche_livre_jeunesse.php
require_once 'db.php';

$requete = $pdo->prepare("SELECT * FROM livres WHERE categorie = 'Jeunesse'");
$requete->execute();
$livres = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeunesse</title>
</head>
<body>
    <h1>jeunesse</h1>
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
    <title>Livres Jeunesse</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiche livre - jeunesse | ASM BOOKSHOP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="main-header">
    <img src="img/logo.png" alt="Logo gauche" class="logo">
    <h1 class="site-title">ASM BOOKSHOP</h1>
    <nav class="main-nav">
        
        <a href="index.html">Accueil</a>
        <a href="fiche_livre_jeunesse.php">
    <button class="active">Jeunesse</button>
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
    <h1>Livres Jeunesse</h1>
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
          <h3>Les eclats du labyrinthes<br><small> par Mehdi Tarek</small></h3>
          <span class="genre-badge">Jeunesse</span>
          <p class="resume">
            <strong>Résumé :</strong><br>Quatre ados enfermés dans un centre de redressement reçoivent une chance : résoudre un labyrinthe en 30 jours. Mais certains ne veulent pas sortir...
          </p>
          <div class="prix-action">
            <span class="prix">12,00€</span>
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
          <h3>Zoe et la clé de la lune <br><small>par Nina Lapierre</small></h3>
          <span class="genre-badge">Jeunesse</span>
          <p class="resume">
            <strong>Résumé :</strong><br>Zoé découvre une clé magique dans son cartable. Chaque nuit, elle ouvre la porte d’un monde où les reves deviennent vrais.
          </p>
          <div class="prix-action">
            <span class="prix">9,90€</span>
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
            </form>
        </div>
        <hr>
    <?php endforeach; ?>
</body>
</html>