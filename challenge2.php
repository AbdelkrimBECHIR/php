<?php
        /*fonction pour dechiffre 


        */
function dechiffrer($message) {
        //1
    $longueurChaine=strlen($message);
    $chiffreCle=$longueurChaine/2;
    //echo $chiffreCle, '<br>';

        //2
    $sousChaine=substr($message,5,$chiffreCle);
    //echo $sousChaine, '<br>';

        //3
    $sousChaine=str_replace('@#?',' ',$sousChaine);
    //echo $sousChaine, '<br>';

        //4
    $inverseSousChaine=strrev($sousChaine);
    //echo $inverseSousChaine, '<br><br>';
       
        return $inverseSousChaine;
    

}

echo dechiffrer("0@sn9sirppa@#?ia'jgtvryko1");
echo ' ';
echo dechiffrer('q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj');
echo ' ';
echo dechiffrer("aopi?sgnirts@#?sedhtg+p9l!");
echo '<br>';

$message=("0@sn9sirppa@#?ia'jgtvryko1");
$resultat=dechiffrer($message);
echo $resultat,' ';

$message=('q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj');
$resultat=dechiffrer($message);
echo $resultat,' ';

$message=("aopi?sgnirts@#?sedhtg+p9l!");
$resultat=dechiffrer($message);
echo $resultat,' ';






