<?php

echo "Programare orientata pe obiect.";
include ('Carti.php');
include ('Car.php');
include ('autoload.php');
$carte = new Carti('Ion', 'Liviu Rebreanu');

$carte2 = new Carti();


echo "<pre>";
var_dump($carte);
var_dump($carte2);


echo $carte->titlul;echo '<br>';
$carte2->titlul='Proza';
echo 'Titlul la prima carte: '.$carte->titlul;
echo '<br>';
echo 'Titlul la a 2-a carte: '.$carte2->titlul;
var_dump($carte2);

$masina = new Car();
var_dump($masina);


echo $masina::$numarRoti;
//echo $masina->numarUsi;
//echo $masina->marca;

echo $masina->afiseazaNrUsi();
$masina->schimbaNrUsi(1);
echo $masina->afiseazaNrUsi();







?>