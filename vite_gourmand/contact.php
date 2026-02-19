<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue chez Vite & Gourmand</title>
         <link rel="stylesheet" href="style.css">
    <div class="container mt-1"></div>
</head>

<body class="index">

<?php
include ("menu.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    
        <form action="" method="POST">
        <h4>Contact</h4>
        <hr>
            <div>
                <label>Email</label>
                <input type="text" name="email">
            </div>            
            <div>
                <label>Titre</label>
                <input type="text" name="titre">
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="description">
            </div>
        <hr>
        <button type="submit" class="btn btn-success mt10perso">Envoyer le message</button>
        
        </form>
</div>
</body>
</html>