<?php
include("config.inc.php");
$requete = 'SELECT * FROM avis';
$exe = $bdd->query($requete);

$resultats = $exe->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue chez Vite & Gourmand</title>
         <link rel="stylesheet" href="style.css">
    <div class="container mt-1">
    </div>
</head>

<body class="index">
<?php
include ("menu.php");
?>
    <div class="container mt-1">
            <h2>Bienvenue chez Vite & Gourmand</h2>
            <p>
            Découvrez nos menus gourmands préparés avec des ingrédients frais.
            Commandez en ligne et régalez-vous !
            </p>
    </div>

</div>
<section>
</form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-1">
<p>
Vite et Gourmand, est une entreprise constituée de deux personnes, Julie et José. 
Elle existe depuis 25 ans à Bordeaux, et propose leurs prestations pour tout événement (simple repas
comme Noel ou encore Pâques) au travers d’un menu en constante évolution. Nous sommes une entreprise dédiée à fournir des services de qualité, basée sur la confiance,
la transparence et l’accompagnement de nos clients dans leurs projets.
Les menus sont proposés en fonction des saisons et des produits frais disponibles. Vous pouvez choisir parmi une variété de plats, allant des entrées aux desserts, en passant par les plats principaux.
</p>
</section>
</div>
<section>
    <div class="container mt-1">
<h2>25 ans d'expérience en restauration événementielle</h2>
    </div>
<div class="container mt-1">

    <div class="row align-items-center">
        <div class="col-md-5">
            <img src="photo/professionnalisme.jpg" alt="image professionnalisme" class="img-fluid rounded">
</div>
        <div class="col-md-7">
<div class="container mt-1">
<p>
Notre équipe est composée de professionnels expérimentés, sérieux et engagés.
Leur expertise garantit un travail soigné et un suivi rigoureux pour chaque mission.
</p>
</section>
</div>

<div class="container mt-5">

    <h3 class="text-center">Ils nous ont fait confiance</h3>
    <div class="container mt-3">

    <div class="row">
        <!-- Avis 1 -->
        <?php foreach ($resultats as $ligne) { ?>
        <div class="col-md-4 mb-3">
            <div class="card p-3 h-100 shadow-lg rounded">
                <h5><?php echo htmlspecialchars($ligne['nom']); ?></h5>
                <p><?php echo htmlspecialchars($ligne['commentaire']); ?></p>
                <p><?php echo htmlspecialchars($ligne['date_avis']); ?></p>
                <p>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                    echo $i <= $ligne['note'] ? "⭐️" : "☆";
                    }
                    ?>
                </p>
            </div>
        </div>
        <?php } ?>
</div>

<main class="container py-5" style="max-width: 560px;">
  <h1 class="h4 mb-4 text-center">Connexion</h1>

  <div id="alert-box" class="alert d-none" role="alert"></div>

  <div class="card shadow-lg">
    <div class="card-body">
      <form action="valid_connexion.php" method="POST" id="login-form" >
        <div class="mb-3">
          <label for="pseudo" class="form-label">pseudo</label>
          <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="pseudo" required>
          <div class="invalid-feedback">Veuillez saisir un pseudo valide.</div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <div class="input-group">
            <input type="password" name="password" class="form-control" id="password" placeholder="••••••••" required>
            <button class="btn btn-outline-secondary" type="button" id="togglePwd">Afficher</button>
          </div>
          <div class="invalid-feedback">Mot de passe requis.</div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label" for="remember">Se souvenir de moi</label>
          </div>
          <a href="#" class="small text-decoration-none" id="forgot-link">Mot de passe oublié ?</a>
        </div>

        <button class="btn btn-primary w-100" type="submit" id="btn-login">Se connecter</button>
      </form>

      <hr class="my-4">
      <p class="mb-0 text-center small">
        Pas encore de compte ?
        <a href="./register.html" class="text-decoration-none">Créer un compte</a>
      </p>
    </div>
  </div>
</main>
</body>


<footer id="footerPage" class="text-center py-5 border-top" style="background:oklab(100% 0 -0.00011); margin-top:5%; align-items-center:">
    <div class="container small">
      <div class="row gy-3">
            <div class="col-md-4 mb-1">
                <h5>Contact</h5>
                <p>
                    12 rue de la Pizza, 75000 Paris <br>
                    Tél: 01 23 45 67 89 <br>
                    ✉️ contact@vitegourmand.fr
                </p>
            </div>
        
            <div class="col-md-4 mb-1">
                <h5>Horaires d'ouverture</h5>
                <p>
                    Lundi - Jeudi : 11h - 22h <br>
                    Vendredi - Samedi : 11h - 23h <br>
                    Dimanche : 18h - 22h
                </p>
            </div>

            <div class="col-md-4 mb-1">
                <h5> 
                    <a href="mentions_legales.php">Mentions légales</a>
                </h5>
                <p>
                    © 2026 Vite & Gourmand <br>
                    Tous droits réservés <br>
                    Politique de confidentialité <br>
                    Conditions générales
                </p>
            </div>            

        </div>

        <hr class="border-light">
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="./js/login.js"></script>
<script src="./js/nav-auth.js"></script>
</html>;