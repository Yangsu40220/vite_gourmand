<?php

include('config.inc.php');

$id = $_GET['id'];
$requete="UPDATE utilisateur SET role=3 WHERE id='$id'";
$exe = $bdd->query($requete);

header('Location: list_employe.php');
