<?php
    $titre = "Liste des articles";
    require_once("header.php");
    require_once("connexion.php");

    //ma requète sql
    $sql = "SELECT * FROM articles ORDER BY title ASC";
    //j'envoie ma requète a la base de données
    $requete = $db->query($sql);
    //J'affiche mes résultas
    $articles = $requete->fetchAll(PDO::FETCH_ASSOC);

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
    <h1>liste des articles</h1>
    
        <section>
            <?php foreach($articles as $article): ?>
                <!-- On rajoute strip_tags pour sécuriser l'affichage des données -->
                <h2><a href="article.php?id=<?= $article["id"] ?>"> <?= strip_tags($article["title"]); ?> </a></h2>
                <p><?= $article["created_at"] ?></p>
                <div><?= strip_tags($article["content"]) ?></div>
            <?php endforeach; ?>
        </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

