<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $clients = [
            "ref1" => [
                "nom" => "Singer",
                "prenom" => "Bobby",
            ],
            "ref2" => [
                "nom" => "Winchester",
                "prenom" => "Dean",
            ]
            ];

        foreach($clients as $client){
            echo "<p>{$client["prenom"]} {$client["nom"]}</p>";
        }

        echo "<p>//////////////////////////////////////////</p>";
        
    //Recupèrer la reférence client:
        foreach($clients as $ref => $client){
            echo "<p>Reférence client: $ref</p>";
            echo "<p>{$client["prenom"]} {$client["nom"]}</p>";
        }



        // for($nombre = 1; $nombre <= 10; $nombre++){
        //     echo "<p>$nombre</p>";
        // }
    ?>
</body>
</html>