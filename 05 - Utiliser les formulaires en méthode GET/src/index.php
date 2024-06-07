<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <div>
            <label for="nombre1">Nombre 1 :</label>
            <input type="number" id="nombre1" name="nb1">
        </div>
        <div>
            <label for="nombre2">Nombre 2 :</label>
            <input type="number" id="nombre2" name="nb2">
        </div>
        <button type="submit" id="add" name="addition">Addition</button>
        <button type="submit" id="soustrac" name="soustraction">Soustraction</button>
    </form>

    <?php
        //résulta dans l'url : http://localhost:8003/?nb1=124&nb2=36

        // echo "<pre>";
        //     var_dump($_GET["nb1"]);
        // echo "</pre>";

    // //Récupération des element de l'url + addition
    //     $_GET["addition"] = $_GET["nb1"] + $_GET["nb2"];
    //     echo($_GET["addition"]);

        ?> <br> <?=
    //Récupération des element de l'url + soustraction
        $_GET["soustraction"] = $_GET["nb1"] - $_GET["nb2"];
        echo($_GET["soustraction"]);

    ?>
</body>
</html>



<!-- <form method="GET">
        <div>
            <label for="nombre1">Nombre 1 :</label>
            <input type="number" id="nombre1" name="nb1">
        </div>
        <div>
            <label for="nombre2">Nombre 2 :</label>
            <input type="number" id="nombre2" name="nb2">
        </div>
        <button type="submit">Calculer</button>
    </form>

    <?php
        //résulta dans l'url : http://localhost:8003/?nb1=124&nb2=36

        // echo "<pre>";
        //     var_dump($_GET["nb1"]);
        // echo "</pre>";

        // $total = $_GET["nb1"] + $_GET["nb2"];
        // echo($total);

    ?> -->