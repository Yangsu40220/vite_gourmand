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
    <title>Mention Légales</title>
         <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="menu">
            <ul style="display:flex; list-style:none; gap:20px; font-family: Arial, Helvetica, sans-serif; font-size:20px;">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Notre Menu</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <h1>Mentions légales</h1>
    <h2>1/ Editeur du site www.vite&amp;gourmand.fr</h2>

    <div>
    SARL Barbylone, SAS FAZOL, au capital de 5000 €, immatriculée au RCS de SOORTS-HOSSEGOR sous le numéro 851200717, Siret n° 85120071700011, ayant son siège social au Quai du Bourret 30330 Bordeaux, numéro de TVA : FR48851200717, n° tel : 0512345678, email : 
Directeur de la publication : - / -.
    </div>
    <br>
    <h2>2/ Hébergement</h2>
Hébergeur: Amazon Web Services EMEA SARL (AWS Europe), 4033 Citywest Avenue, Cooldown Commons, County Dublin, IRELAND https://aws.amazon.com
    <br>
    <div>
    <br>
    <h2>3/ Webmaster</h2>
Zenchef - Bordeaux - webmaster{at}zenchef.com
    </div>
    <br>
    <div>
    <h2>4/ Condtion general de vente</h2>
Les présentes conditions générales de vente s'appliquent aux prestations fournies par l'établissement : toute réservation implique de la part du client l’acceptation des présentes conditions. Seules les clauses particulières des accords signés avec le client pourront compléter, préciser, voire déroger aux présentes conditions de vente.
Tarifs
Les tarifs sont exprimés en euros TTC. Ils s’entendent par personne pour les prestations de repas.
Pour la privatisation d’un salon ou des prestations annexes, les tarifs sont forfaitaires.
Les tarifs applicables sont ceux en vigueur au moment de la réservation. Si toutefois la réservation a eu lieu plus de dix mois avant la date de la prestation, Les Noces de Jeannette se réservent le droit d’appliquer ses tarifs en vigueur au moment de la prestation, moyennant un préavis prévu dans la proposition commerciale.
Il appartient au client d'apprécier lors de la réservation si le prix lui convient en acceptant son caractère forfaitaire. Aucune contestation concernant le prix de la prestation ne pourra être prise en considération ultérieurement.
<br>
<br>
<p>Confirmation de réservation
Toute réservation n’est effective et confirmée qu’après réception d’un acompte de 70% du prix de la prestation, accompagné du retour du devis ou de la proposition commerciale revêtu de la mention « bon pour accord ».
A défaut de la réception de l’acompte et de son parfait encaissement, l'établissement ne confirme pas la réservation et ne garantit pas la prestation.
<br>
</p>
Confirmation du menu
La proposition commerciale ou de devis peut comporter un choix entre plusieurs menus.
Afin de pouvoir pleinement satisfaire le client, celui-ci doit indiquer son choix définitif au restaurant au plus tard six jours avant la prestation.
Après ce délai, le restaurant ne pourra garantir le service de certains mets ou vins composant le menu.
    </div>

    </div>
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