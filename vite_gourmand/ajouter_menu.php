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
        $message = $_GET['message'];
        if ($message == "erreur1") {
            echo "<div class='messageHautDePage'>Ce pseudo est déjà utilisé, veuillez recommencer...</div>";
        } else if ($message == "erreur2") {
            echo "<div class='messageHautDePage'>Le mot de passe est trop court, il doit faire 10 caractères au minimum, veuillez recommencer...</div>";
        } 
    ?>
    <form action="valider_menu.php" method="POST">
        <h4>Ajout menu</h4>
        <hr>
            <div>
                <label>titre</label>
                <input type="text" name="titre">
            </div>            
            <div>
                <label>photo</label>
                <input type="file" name="photo">
            </div>
            <div>
                <label>entree</label>
                <input type="text" name="entree">
            </div>
             <div>
                <label>plat</label>
                <input type="text" name="plat">
            </div>
             <div>
                <label>dessert</label>
                <input type="text" name="dessert">
            </div>
             <div>
                <label>allergenes</label>
                <input type="text" name="allergenes">
            </div>
             <div>
                <label>prix</label>
                <input type="text" name="prix">
            </div>



        <input type="submit" value="Ajouter">
        
           
    </form>


</body>
</html>