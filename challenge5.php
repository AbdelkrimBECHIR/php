<?php


$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.
echo 'if you look '.$opponentWeapon,'<br>';


switch ($opponentWeapon) {
    case 'fist':
        $stevensonWeapon='gun';
        break; 
    case 'whip':
        $stevensonWeapon='fists';
        break; 
    case 'gun':
        $stevensonWeapon='whip';
        break; 
    //default:
        $stevensonWeapon='runrunrun';
        break; 
}

echo 'you must take '. $stevensonWeapon;