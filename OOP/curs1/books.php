<?php
include ('Carti.php');

$book1 = new Carti();
$book2 = new Carti();

$book1->setTitlul('Poezii');
$book1->setAutor('Mihai Eminescu');
$book1->setEditura('Polirom');
$book1->setAn_aparitie('2015');
$book1->setNr_pagini('235');
$book1->setPret('125');


$book2->setTitlul('Proza');
$book2->setAutor('Ion Creanga');
$book2->setEditura('RAO');
$book2->setAn_aparitie('2008');
$book2->setNr_pagini('158');
$book2->setPret('85');

$book1->afiseazaCarte();
$book2->afiseazaCarte();

$book3= clone $book1;
$book3->afiseazaCarte();
$book3->setTitlul('Marile Sperante');
$book1->afiseazaCarte();
$book2->afiseazaCarte();
$book3->afiseazaCarte();



?>