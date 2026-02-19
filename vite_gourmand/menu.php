<?php 
session_start(); 
?>

<div class="container mt-1">
    <header>
        <nav class="menu">
            <ul style="display:flex; list-style:none; gap:20px; font-family: Arial, Helvetica, sans-serif; font-size:20px;">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="tous_nos_menus.php">Tous nos menus</a></li>
                <li><a href="contact.php">Contact</a></li>
            
                <?php 
                if (isset($_SESSION['utilisateur'])) { 
                ?>
                    <li><a href="profil.php">Profil</a></li>
                <?php 
                } else { 
                ?>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                <?php 
                } 
                ?>
            </ul>
        </nav>
    </header>
</div>
