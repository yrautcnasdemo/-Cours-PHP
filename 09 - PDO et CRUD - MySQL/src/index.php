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
    //Je prépare ma requete
        $sql="SELECT * FROM users WHERE pseudo='Singer'";
    //Je stock ma requête dans une variable et je l'envoie dans ma db
        $requete = $db->query($sql);
    //Je stock l'affichage de ma requète dans une variable
        $user = $requete->fetch(PDO::FETCH_ASSOC);

        // echo "<pre>";
        //     var_dump($user);
        // echo "</pre>";


    //Ajouter utilisateur : 
    //Attention a bien utiliser des '' dans la 2eme partie du code (aprés VALUES)
        $sql="INSERT INTO `users`(`pseudo`,`email`,`pass`,`roles`)VALUES('Dean','eott@gmail.com','azerty','USER');";

        $requete = $db->query($sql);


    //Modifier données utilisateurs
        $sql="UPDATE users SET pass = 'testest' WHERE id = 3";
        $requete = $db->query($sql);


    //Supprimer des données
        $sql="DELETE FROM users WHERE id > 4";
        $reqeute = $db->query($sql);





    ?>
</body>
</html>