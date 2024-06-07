<?php 
    //J'assigne mes info de connection dans des constantes 
    const DBHOST = "db";
    const DBNAME = "cours_php";
    const DBUSER = "test";
    const DBPASS = "test";

    //dsn = Data Source Name (chemin de connexion pour accéder a la BDD)
    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset:UTF8";

    //Tentative de connexion
    try{
        $db = new PDO($dsn, DBUSER, DBPASS);
    }catch(PDOException $erreur){
        die("Echec de la connexion: " . $erreur->getMessage());
    }