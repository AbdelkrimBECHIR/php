<?php


function writeSecretSentence(string $PARAMETRE_1, string $PARAMETRE_2): string
{
    $resultat = ($PARAMETRE_1 . ' s\'incline face à ' . $PARAMETRE_2);
    return $resultat;
}



echo writeSecretSentence('chat', 'lune');
