<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Tableaux</title>
</head>
<body>
    <h1>Exercice Tableaux</h1>
    <?php
        $tabFrance = ["Paris", "Lyon", "Nantes"];
        $tabItalie = ["Rome", "Venise"];
        $tableau = ["FRANCE" => $tabFrance, "ITALIE" => $tabItalie];

        // Ou

        $tableau["FRANCE"] = ["Paris", "Lyon", "Nantes"];
        $tableau["ITALIE"] = ["Rome", "Venise"];

        // Ou

        $tableau = [
            "FRANCE" => [
                "Paris",
                "Lyon",
                "Nantes"
            ],
            "ITALIE" => [
                "Rome",
                "Venise"
            ]
        ];

        // Pour validation :
        /*
        echo "<pre>";
        print_r($tableau);
        echo "</pre>";
        */
        
        // Parcours du tableau
        foreach($tableau as $pays => $villes) {
            echo $pays . "<br/>";
            foreach($villes as $ville) {
                echo $ville . "<br/>";
            }
        }

    ?>
</body>
</html>