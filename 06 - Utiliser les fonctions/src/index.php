<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function additionner($nb1, $nb2){
            echo $nb1 + $nb2;
        }

        function saluer($salutation, $nom, $prenom){
            echo "$salutation $nom $prenom";
        }
    //Ici on rajoute un parametre optionnel a la fin
        function saluer2($first_name, $last_name, $hello = "Hello"){
            echo "$hello $first_name $last_name";
        }
    ?>

        <p><?php echo additionner(22, 24); ?></p>
        <p><?php echo saluer("bonjour", "Neko", "nekoneko"); ?></p>

        <h1><?php saluer("Salut", "Eltanin", "Keryoh") ?></h1>

        <h2><?php saluer2("Yrau", "Keryoh") ?></h2>
</body>
</html>