<?php

include('config.inc.php');
$id = $_GET['id'];
$requete = 'DELETE FROM tous_les_menus WHERE id = ' .$id;
    $bdd->query($requete); 
    header('Location: tous_nos_menus.php?message=suppressionOk');
