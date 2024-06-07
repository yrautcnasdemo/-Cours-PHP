<?php
    //ETAPE 1 :
    //On vérifie si on a un ID, et on redirige si il n'y en a pas
    if(!isset($_GET["id"]) || empty($_GET["id"])){
        header("Location: articles.php");
        exit;
    }



    //ETAPE 2 : 
    //Si l'id existe alors : on récupere l'id en la stockant dans une variable, ... 
    //... on se connecte a la BDD, et on passe la requete pour récupèrer les info de l'article

    $id = $_GET["id"]; //l'id existe, donc on la récupère et on la stocke dans une variable

    require_once("connexion.php");

    //on écrit la requete sql pour aller cherche l'id dans la BDD et on la stocke dans une variable
    $sql = "SELECT * FROM articles WHERE id = :id";

    //on prépare la requete et on la stocke dans une variable
    $requete = $db->prepare($sql);

    //On bind les parametres
    $requete->bindValue(":id", $id, PDO::PARAM_INT);

    //On execute la requete
    $requete->execute();

    //On recupere la ou les données pour les afficher et on les stocke dans une variable
    $article = $requete->fetch();



    //ETAPE 3 :
    //Si pas d'article envoyer une erreur 404 ou rediriger vers une page Erreur 404 que l'ont aurait créer :
    if(!$article){
        header("Location: errorpage404.php");
        exit;
    }

    $titre = strip_tags($article["title"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php require_once("header.php"); ?>
    <h1>Articles</h1>
    
        <section>
                <!-- On rajoute strip_tags pour sécuriser l'affichage des données -->
                <h2><?= strip_tags($article["title"]); ?></h2>
                <p><?= $article["created_at"]; ?></p>
                <div><?= strip_tags($article["content"]); ?></div>
        </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
