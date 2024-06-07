<?php 

//On vérifie si le formulaire a était envoyé 
    if(!empty($_POST)){
        if(isset($_POST["nickname"], $_POST["email"], $_POST["pass"])
        && !empty($_POST["nickname"]) && !empty($_POST["email"]) && !empty($_POST["pass"])){

            //formulaire complet
            $pseudo = strip_tags($_POST["nickname"]);

            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){ 
              //filter_var et FILTER_VALIDATE_EMAIL serve a sécuriser l'adresse mail en back-end
                die("L'adresse eMail est incorrecte");
            }

            //On se connecte a la BDD
            require_once("connexion.php");



            //On ajoute les vérifications : 
                // ETAPE 1 : Vérification de l'existence de l'e-mail
                $sql_mail_verif = "SELECT COUNT(*) AS nb_emails FROM users WHERE email = :email";
                $requete_email = $db->prepare($sql_mail_verif);
                $requete_email->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
                $requete_email->execute();

                $email_count = $requete_email->fetchColumn(); // Récupère le nombre d'emails trouvés

                if ($email_count > 0) {
                    die("Cette adresse eMail est déjà utilisée");
                }

                // ETAPE 2 : Confirmation des mots de passes
                if (isset($_POST["pass"]) && isset($_POST["pass2"])) {
                    $pass = $_POST['pass'];
                    $pass2 = $_POST['pass2'];
                
                    // Validation de la correspondance des mots de passe
                if ($pass === $pass2) {
                //On hash le mdp
                $pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);
                // Mot de passe confirmé, procédez à la logique d'inscription (par exemple, hachage et stockage du mot de passe)
                    echo "Mot de passe confirmé, inscription en cours...";
                    } else {
                        die("Les mots de passe ne correspondent pas.");
                    }
                }


                
            //on écrit la requête sql
            $sql = "INSERT INTO users(username, email, pass) VALUES (:pseudo, :email, '$pass')";

            $requete = $db->prepare($sql);

            $requete->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
            $requete->bindValue("email", $_POST["email"], PDO::PARAM_STR);

            $requete->execute();

        }
            else { 
                die("Le formulaire est incomplet");
            }
    } 

    require_once("header.php");

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
    <h1>Inscription</h1>

    <form method="post">
        <div>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="nickname" id="pseudo">
        </div>
        <div>
            <label for="email">eMail</label>
            <input type="mail" name="email" id="email">
        </div>
        <div>
            <label for="pass">Mot de passe</label>
            <input type="password" name="pass" id="pass">
        </div>
        <div>
            <label for="pass2">Confirmation mot de passe</label>
            <input type="password" name="pass2" id="pass2">
        </div>
        <button type="submit">Envoyer</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>