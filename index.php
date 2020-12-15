<?php
// <!-- Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
// ogni partita avrà le seguenti caratteristiche:
// squadra di casa
// squadra ospite
// punti fatti dalla squadra di casa
// punti fatti dalla squadra ospite -->
$matches = [

    [
        "Team home" => [
            "Team" => "Trento",
            "Point" => 74
        ],

        "Team guest" => [
            "Team" => "Cantù",
            "Point" => 73
        ],
    ],

    [
        "Team home" => [
            "Team" => "Varese",
            "Point" => 76
        ],

        "Team guest" => [
            "Team" => "Reggiana",
            "Point" => 89
        ],
    ],

];

// var_dump($matches);
// $home_team = var_dump(($matches[0]["Team home"]["Team"]));
// $point_team_home = var_dump(($matches[0]["Team home"]["Point"]));
//
// $guest_team = var_dump(($matches[0]["Team guest"]["Team"]));
// $point_team_guest = var_dump(($matches[0]["Team guest"]["Point"]));

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>ITALIA: Lega A</h1>
        <h3>Ultimi risultati</h3>
        <ul>
            <?php
                for ($i=0; $i < count($matches); $i++) {
                    echo $matches[$i]["Team home"]["Team"]." - ";
                    echo $matches[$i]["Team guest"]["Team"]."<br>";

                };
             ?>
        </ul>
    </body>
</html>
