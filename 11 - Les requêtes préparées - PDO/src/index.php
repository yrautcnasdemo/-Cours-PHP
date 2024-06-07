<?php
    require_once("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
    <?php

    $pseudo = "azerty";
    $pass = "azerty";

        //Ici on prépare la requete avec sans attribuer de données précise a pseudo et pass afin d'empécher les injections sql
        $sql = "SELECT * FROM users WHERE pseudo=:pseudo AND pass=:pass";

        //On prépare l'envoie la requete dans la BDD
        $requete = $db->prepare($sql);

        //Ici on bind les valeurs dans la requete $sql afin de la complèter avant de l'executer (on remplace donc :pseudo par $pseudo 
        //et on rajoute le paramètre PDO::PARAM_STR c'est optionelle ca n'augmente pas la sécurité ca apporte juste des précisions)
        $requete->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $requete->bindValue(":pass", $pass, PDO::PARAM_STR);

        //On execute la requète qui est maintenant complète et safe
        $requete->execute();

        //récupèrer les données
        $user = $requete->fetch(PDO::FETCH_ASSOC);

        echo "<pre>";
            var_dump($user);
        echo "</pre>";

    ?>
</body>
</html>