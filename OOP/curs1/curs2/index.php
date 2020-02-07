<?php
include ('autoload.php');

$cal= new Animal('Murgu');
$ponei=clone $cal;

echo $cal;


/*
echo "<pre>";
var_dump($cal);

$cal->setMancare('fan');
$cal->mananca(10);
echo "<pre>";

echo $cal->greutate;
echo "Greutatea actuala este: ".$cal->getGreutate();
$cal->setMancare('iarba');
$cal->mananca(14);
echo "<pre>";
echo $cal->greutate;
echo "<pre>";
echo $cal->getGreutate();

echo "<pre>";
$cal::setnrPicioare(4);
echo "Acest animal are: ".Animal::$nrPicioare;
echo "<pre>";
$cal->doarme(3);echo "<pre>";
$cal->comunica('beh');
*/




?>