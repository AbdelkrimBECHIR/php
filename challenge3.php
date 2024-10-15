<?php


$books =[
    'livre 1'=> '1895',
    'livre 2'=> '1756',
    'livre 3'=> '1880',
];

asort($books);

foreach($books as $key=>$annee){

    echo $annee,' ';
    echo $key,'<br>';
};







