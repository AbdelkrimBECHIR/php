<?php

$characters = [
    "Abdelkrim Bechir" =>[
        "city" => "Paris",
        "weapon" => "Lazer",
    ],
    "Negan" => [
        "city" => "The Sanctuary",
        "weapon" => "Lucille"
    ],
    "Daryl" => [
        "city" => "Alexandria",
        "weapon" => "crossbow"
    ],
    "Ezekiel" => [
        "city" => "The Kingdom",
        "weapon" => "Shiva"
    ]
];

// We write code here

echo $characters["Abdelkrim Bechir"]["city"];
echo '<br>';
print $characters["Abdelkrim Bechir"]["weapon"];

// test var_dump avec Xdebug

var_dump($characters);





