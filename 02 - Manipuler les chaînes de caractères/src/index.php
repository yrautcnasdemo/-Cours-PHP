<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Attention, dans une chaine de caractère l'index commence a 0 et les accents compte double! "é" = 2 caractères
        $chaine = "Ceci est un texte";
        $name = "bwa";


    //Ici on récupère le 5eme caractère de la chaine
        // echo $chaine[5];


    //ici on change le 7eme caractère de la chaine
        // $chaine[7] = "F";


    //extraire une partie de la chaine, le 1e paramètre "0" correespond a l'endroit où l'ont veux commencer la récupération
    //Le 2eme paramêtre "5" correspond a l'endroit où l'ont termine la récupération
        // echo substr($chaine, 0 , 5 );
    //Récupèrer des caractères a partir de la fin
        // echo substr($chaine, -8);


    //remplacer une partie de la chaine:
    //ici on remplace Ceci par cela
        // $chaine = str_replace("Ceci" , "cela" , $chaine);

    //ici on remplace texte par une variable
        // $chaine = str_replace("texte" , $name , $chaine);
        // var_dump($chaine)

    //verifie si la chaine de caractère contient le mot "un"
        // var_dump(str_contains($chaine, "un"));
    //Vérifie si la chaine de caractère commence par le mot "Ce" remplacer start par end pour vérifier si il fini par tel ou tel chaine de caractère
        // var_dump(str_starts_with($chaine, "Ce"));

        
        
    
    ?>
    <p></p>
</body>
</html>