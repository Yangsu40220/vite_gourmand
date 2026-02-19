<?php

include('config.inc.php');

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$num_portable = $_POST['num_portable'];
$adresse_postale = $_POST['adresse_postale'];
$inscription_employe=$_POST['inscription_employe'];
$mail = $_POST['mail'];
if ($inscription_employe==2){
	$inscription_employe=2;
} else {
	$inscription_employe=3;
	}


if (strlen($password) > 9) {
		// Le mot de passe est juste
		
		$requete = 'SELECT * FROM utilisateur WHERE pseudo = "' . $pseudo .'"';
    	$exe = $bdd->query($requete);
    	$nbReponses = $exe->rowCount();

    	if ($nbReponses > 0) {
			if ($inscription_employe==2){
    		header('Location: ajout_employe.php?message=erreur1');
			}	else{
				header('Location: inscription.php?message=erreur1');
			}
    	} else {
    		$requete2 = 'INSERT INTO utilisateur (pseudo, password, nom, prenom, role, num_portable, mail, adresse_postale) VALUES ("' . $pseudo .'", "' . $password .'", "' . $nom .'", "' . $prenom .'","' . $inscription_employe .'", "' . $num_portable .'","' . $mail .'","' . $adresse_postale .'")';
    		$exe = $bdd->query($requete2);

    		header('Location: connexion.php?message=ok');
    	}
	} else {
		if ($inscription_employe==2){
    		header('Location: ajout_employe.php?message=erreur2');
			}	else{
				header('Location: inscription.php?message=erreur2');
			}
		
	}