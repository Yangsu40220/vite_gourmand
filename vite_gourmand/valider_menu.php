<?php

include('config.inc.php');

$titre = $_POST['titre'];
$photo = $_POST['photo'];
$entree = $_POST['entree'];
$plat = $_POST['plat'];
$dessert = $_POST['dessert'];
$allergenes = $_POST['allergenes'];
$prix = $_POST['prix'];

		$requete2 = 'INSERT INTO tous_les_menus (titre,photo,entree,plat,dessert,allergenes,prix) VALUES ("' . $titre .'", "' . $photo .'", "' . $entree .'", "' . $plat .'","' . $dessert .'","' . $allergenes .'","' . $prix .'")';
    	
        $exe = $bdd->query($requete2);
    	$nbReponses = $exe->rowCount();

    	if ($nbReponses > 0) {
		
    		header('Location: tous_nos_menus.php?');
			}	else{
				header('Location: ajouter_menu.php?message=erreur1');
			}
 