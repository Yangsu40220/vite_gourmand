<?php
    session_start();
        include('config.inc.php');
        $bdd = new PDO('mysql:host='.BDD_SERVER.';dbname='.BDD_DATABASE.';charset=utf8', BDD_LOGIN, BDD_PASSWORD);
        $role = "visiteur";
       
    if (isset($_SESSION['utilisateur']))
    {
        $requeteCo2 = 'SELECT * FROM utilisateur WHERE pseudo = "'.$_SESSION['utilisateur'].'"';
        $exeuserCo2 = $bdd->query($requeteCo2);
        $userCo2 = $exeuserCo2->fetch();
        if ($userCo2['role'] == 1) {
            $role = "admin";
        } else if ($userCo2['role'] == 2) {
            $role = "employe";
        
        } else {
            $role="non_connecte";
        }
    $_SESSION['utilisateur_role']=$role;
    } else {
        header('Location: connexion.php');
    }