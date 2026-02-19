<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="">
<?php
include ("menu.php");
?>
    <?php
        include("config.inc.php");
        $message = isset($_GET['message']);
        if ($message == "erreur1") {
            echo "<div class='messageHautDePage'>Ce pseudo est déjà utilisé, veuillez recommencer...</div>";
        } else if ($message == "erreur2") {
            echo "<div class='messageHautDePage'>Le mot de passe est trop court, il doit faire 10 caractères au minimum, veuillez recommencer...</div>";
        } 
    ?>
    <form action="valid_inscription.php" method="POST">
        <h4>Ajout d'employe</h4>
        <hr>
            <div>
                <label>Pseudo</label>
                <input type="text" name="pseudo">
            </div>            
            <div>
                <label>Nom</label>
                <input type="text" name="nom">
            </div>
            <div>
                <label>Prénom</label>
                <input type="text" name="prenom">
            </div>
    

        <label>Adresse Postale</label>
        <input type="text" name="adresse_postale">

        <label>Mail</label>
        <input type="mail" name="mail">

        <label>Password</label>
        <input type="password" name="password">
        
        
        <input type="hidden" name="inscription_employe" value="2">

        <input type="submit" value="S'inscrire">
        
           
    </form>


</body>
</html>