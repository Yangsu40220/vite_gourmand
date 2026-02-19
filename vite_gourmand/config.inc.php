<?php
    define('BDD_LOGIN', 'root');
    define('BDD_PASSWORD', ''); 
    define('BDD_SERVER', 'localhost');
    define('BDD_DATABASE', 'vite_gourmand');

    $bdd = new PDO('mysql:host='.BDD_SERVER.';dbname='.BDD_DATABASE.';charset=utf8', BDD_LOGIN, BDD_PASSWORD);
    