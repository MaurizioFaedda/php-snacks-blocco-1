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

var_dump($matches);
$home_team = var_dump(($matches[0]["Team home"]["Team"]));
$guest_team = var_dump(($matches[0]["Team guest"]["Team"]));






?>
