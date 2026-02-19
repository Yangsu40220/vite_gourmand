<?php
include("config.inc.php");

    require 'verification_connexion.php';
    

    if ($role != "admin" ||$role!="employe") {
    
        header('connexion.php');
    }
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
<a href="deconnexion.php">Déconnexion</a>
<?php
if ($role== "admin") {
    ?>
<br>
<a href="ajout_employe.php">Ajout d'un employé</a>
<br>
<a href="list_employe.php">Liste d'employé</a>
<?php } ?>
<?php
if ($role== "admin"||$role=="employe") {
    ?>
<br>
<a href="ajouter_menu.php">Ajouter d'un menu</a>
<br>
<a href="gerer_menus.php">Gerer les menus</a>
<?php } ?>


</body>
</html>
