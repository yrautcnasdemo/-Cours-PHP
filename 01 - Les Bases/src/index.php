<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Hello world !</h1>";

        $name = "Bwa";
    
    //L'injection de variable fonctionne uniquement avec les "" pas avec les ''
        echo "<p>Bonjour $name</p>";

    //Les types de variables:
    //nombre entirer (integer)
    $nombre = 85;

    //nombre déciamale (float)
    $nombre2 = 85.2;

    //Chaines de caractères (string)
    $string = "Ceci est un texte";

    //boolean
    $booleen = true; //false

    //connaitre le contenu et le type d'une variable :
    var_dump($nombre);
    
    ?>
    <p></p>
</body>
</html>