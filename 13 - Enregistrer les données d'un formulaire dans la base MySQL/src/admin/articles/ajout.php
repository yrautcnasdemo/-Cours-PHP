<?php
//On verifie le formulaire
    if(!empty($_POST)){
        //Si POST n'est pas vide, on vérifie que toutes les données sont présentes
        if(isset($_POST["titre"], $_POST["content"])
        && !empty($_POST["titre"]) && !empty($_POST["content"])){

            $titre = strip_tags($_POST["titre"]);
            $contenu = htmlspecialchars($_POST["content"]);

        require_once("../../connexion.php");

        //On écrit la requete
        $sql = "INSERT INTO articles(title, content, created_at) VALUES (:title, :content, :created_at)";

        //On prépare la requete
        $requete = $db->prepare($sql);

        //On bind les valeurs
        $requete->bindValue(":title", $titre, PDO::PARAM_STR);
        $requete->bindValue(":content", $contenu, PDO::PARAM_STR);

        $createdAt = date('Y-m-d H:i:s'); // Remplacer par le format d'horodatage souhaité
        $requete->bindValue(":created_at", $createdAt, PDO::PARAM_STR); // Utiliser PDO::PARAM_STR pour les valeurs de date

        //On execute la requête, si elle passe on valide, sinon erreur404
        if($requete->execute()){
            header("Location: ../../validation.php");
        } else {
            header("Location: ../../errorpage404.php");
        };
    } else {
        die("le formulaire est incomplet");
    }
    }
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
    <?php include_once("../../header.php"); ?>
    <form method="POST">
        <div>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre">
        </div>
        <div>
            <label for="content">Contenu</label>
            <textarea name="content" id="content"></textarea>
        </div>
        <button type="submit">Enregistrer</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>