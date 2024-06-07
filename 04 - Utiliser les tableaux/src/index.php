<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"<pre>";
    //Déclarer un tableau
        $tableau=["Bonjour", 15, true, 85.2, "bwabwa", 99];


    //Ajouter des données:
    //A la fin du tableau
        // array_push($tableau, "fin", 89);
    //ATTENTION, pour ajouter seuelement UNE donnée, il est préférable d'écrire :
        $tableau[] = "fin";
    //Au début du tableau
        array_unshift($tableau, "Debut");


    //Supprimer la derniere valeur du tableau
        // array_pop($tableau);
    //Sortir la derniere valeur du tableau pour la récupèrer 
        $valeur = array_pop($tableau);
    //Supprimer la derniere valeur du tableau
        // array_shift($tableau);
    //Sortir la première valeur du tableau pour la récupèrer
        $valeur = array_shift($tableau);


    //Diviser un tableau en plusieurs partie de 2 valeurs (la valeur true serre a garder la continuité de l'index)
        $tableau2 = array_chunk($tableau, 2, true);

    //Mélanger les données d'un tableau
        shuffle($tableau);


    // var_dump($tableau);        
    // var_dump($tableau2);
    // echo($valeur);




/////////////////////////////////////////////////////////////////////////
    

    //Tableau associatif :
        $tableauAsso=[
            "nom" => "Blue",
            "prenom" => "Marry",
            "age" => "19"
        ];
        var_dump($tableauAsso["nom"]);

    
    //Tableau Multidimenssionel :
        $tableauMulti=[
            0 => [
            "nom" => "Blue",
            "prenom" => "Marry",
            "age" => "19"
            ],
            1 => [
                
            "nom" => "Green",
            "prenom" => "Ashley",
            "age" => "20"
            ]
        ];
        var_dump($tableauMulti[1]["nom"]);


    echo"</pre>";
    ?>
</body>
</html>