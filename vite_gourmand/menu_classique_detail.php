<?php
include("config.inc.php");
$id=$_GET["id"];
$requete = 'SELECT * FROM tous_les_menus where id = ' . $id;
$exe = $bdd->query($requete);

$resultats = $exe->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Classique</title>
         <link rel="stylesheet" href="style-tous-menus.css">
         <link rel="stylesheet" href="style.css">
</head>

<body class="index">
<?php
include ("menu.php");
?> 
        <?php foreach ($resultats as $ligne) {?>
    <main class="image-container mt-1">
        <div class="wrapper">
            <img src="<?php echo($ligne["photo"]); ?>" alt="<?php echo($ligne["titre"]); ?>">
            <img src="<?php echo($ligne["photo2"]); ?>" alt="<?php echo($ligne["titre"]); ?> 2">
            <img src="<?php echo($ligne["photo3"]); ?>" alt="<?php echo($ligne["titre"]); ?> 3">
            <div class="text-box">
            <h2><?php echo($ligne["titre"]); ?></h2>
            <p><?php echo($ligne["entree"]); ?></p>
            <p><?php echo($ligne["plat"]); ?></p>
            <p><?php echo($ligne["dessert"]); ?></p>
            <h4><?php echo($ligne["allergenes"]); ?></h4>
            <h5><?php echo($ligne["prix"]); ?></h5>
            </div>
        </div>
    </main>
        <?php } ?>
<button type="button" id="btnCommander" class="btn btn-lg shadow menu-btn-commande rounded-pill btn-commande-custom text-center" data-bs-toggle="modal" data-bs-target="#modalAuthentification">
                        <i class="bi bi-basket"></i> Commander
</button>

</body>

<footer id="footerPage" class="text-center py-5 border-top" style="background:oklab(100% 0 -0.00011); margin-top:5%; margin-bottom:0cap; align-items-center">
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

</body>
</html>