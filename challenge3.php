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
}



$movies['movie 1']['actor1']= 'jean';
$movies['movie 1']['actor2']= 'joe';
$movies['movie 1']['actor3']= 'jack';
$movies['movie 2']['actor1']= 'jean';
$movies['movie 2']['actor2']= 'joe';
$movies['movie 2']['actor3']= 'jack';
$movies['movie 2']['actor4']= 'jean';
$movies['movie 2']['actor5']= 'joe';
$movies['movie 3']['actor1']= 'jack';
$movies['movie 3']['actor2']= 'jack';
$movies['movie 3']['actor3']= 'jack';
$movies['movie 3']['actor4']= 'jack';

echo $movies['movie 1']['actor 2'];







