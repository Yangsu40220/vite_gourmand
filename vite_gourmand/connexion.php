<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
include ("menu.php");
?>
    <?php
	   
	    $message = isset($_GET['message']);
	    if ($message == "ok") {
	        echo "<div class='messageHautDePage'>Inscription réussie ! Veuillez-vous connecter !</div>";
	    } else if ($message == "connexionKo1") {
	        echo "<div class='messageHautDePage'>Le mot de passe est incorrect</div>";
	    } else if ($message == "connexionKo2") {
	        echo "<div class='messageHautDePage'>Nom d'utilisateur inconnu</div>";
	    }
    ?>
    <div class="container">
        <h4>Connexion</h4>
        <hr>
        <form action="valid_connexion.php" method="post">
            <div class="form-group mt10perso">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo" required>
            </div>
            <div class="form-group mt10perso">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                <div class="lien2 mt10perso">
                    <a href="#" id="afficherMasquer">Afficher le mot de passe</a>
                </div>
            </div>
        <button type="submit" class="btn btn-success mt10perso">Se connecter</button>
        <button class="btn btn-primary mt10perso"><a class="lien" href="inscription.php">S'inscrire</a></button>
        </form>
    </div>
   
<script>
  const passwordInput = document.getElementById('password');
  const toggleLink = document.getElementById('afficherMasquer');

  toggleLink.addEventListener('click', function(e) {
    e.preventDefault();
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      toggleLink.textContent = 'Masquer le mot de passe';
    } else {
      passwordInput.type = 'password';
      toggleLink.textContent = 'Afficher le mot de passe';
    }
  });
</script>
</body>
</html>