<?php
include("config.inc.php");
$requete = 'SELECT * FROM utilisateur where role=2';

$exe = $bdd->query($requete);

$resultats = $exe->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Menus</title>
        <link rel="stylesheet" href="style_tous_nos_menus.css">
        <link rel="stylesheet" href="style.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #b38e96;">
<?php
include ("menu.php");
?>

    <div class="container mt-1">
        <h2>Liste des employés</h2>
    </div>

    <div class="card-container">
        <ul>
    <?php foreach ($resultats as $ligne) {?>
    <li>
        <?php echo($ligne["mail"]); ?> - <a href="employe_to_visitor.php?id=<?php echo($ligne["id"]); ?>">supprimer le role employe</a>
    </li>   

    <?php } ?>
</ul>
    </div>

<footer id="footerPage" class="text-center py-5 border-top" style="background:#e7e7e2; margin-top:5%; align-items-center;">
    <div class="container small">
      <div class="row gy-3">

            <div class="col-md-4 mb-3">
                <h5>Contact</h5>
                <p>
                    12 rue de la Pizza, 75000 Paris <br>
                    Tél: 01 23 45 67 89 <br>
                    ✉️ contact@vitegourmand.fr
                </p>
            </div>
        
            <div class="col-md-4 mb-3">
                <h5>Horaires d'ouverture</h5>
                <p>
                    Lundi - Jeudi : 11h - 22h <br>
                    Vendredi - Samedi : 11h - 23h <br>
                    Dimanche : 18h - 22h
                </p>
            </div>

            <div class="col-md-4 mb-3">
                <h5>Mentions légales</h5>
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
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="./js/login.js"></script>
<script src="./js/nav-auth.js"></script>

</body>
</html>
