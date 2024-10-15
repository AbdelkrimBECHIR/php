<?php

$movies['Marie Tudor']['actor1']= 'Cedric Hardwicke';
$movies['Marie Tudor']['actor2']= 'Nova Pilbeam';
$movies['Marie Tudor']['actor3']= 'John Mills';
$movies['Les mines du roi Salomon']['actor1']= 'jCedric Hardwicke';
$movies['Les mines du roi Salomon']['actor2']= 'Paul Robeson';
$movies['Les mines du roi Salomon']['actor3']= 'Roland Young';
$movies['Les mines du roi Salomon']['actor4']= 'jean';
$movies['Les mines du roi Salomon']['actor5']= 'joe';
$movies['Back Street']['actor1']= 'Charles Boyer';
$movies['Back Street']['actor2']= 'Margaret Sullavan';
$movies['Back Street']['actor3']= 'jack';
$movies['Back Street']['actor4']= 'john';

//var_dump($movies);


foreach($movies as $keys => $movie){
    echo 'Dans le film ', $keys, ', les principaux acteurs sont: ';
    foreach($movie as $keys=>$actor){
    echo $actor,', ';
    };   
    echo '. <br>';
};








