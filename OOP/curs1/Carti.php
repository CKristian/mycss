<?php

class Carti {

public $titlul = 'Poezii';
public $autor;
public $editura;
public $an_aparitie;
public $nr_pagini;
public $pret;
const TIRAJ=3000;

public function __construct($t=null,$a=null){
    if (strlen($t)>=3){
        $this->titlu=$t;
    }
    $nrCuvinte=str_word_count($a);
    if ($nrCuvinte>=2){
        $this->autor=$a;
    }

    }











/**
 * Get the value of titlul
 */ 
public function getTitlul()
{
return $this->titlul;
}

/**
 * Set the value of titlul
 *
 * @return  self
 */ 
public function setTitlul($titlul)
{
$this->titlul = $titlul;

return $this;
}

/**
 * Get the value of autor
 */ 
public function getAutor()
{
return $this->autor;
}

/**
 * Set the value of autor
 *
 * @return  self
 */ 
public function setAutor($autor)
{
$this->autor = $autor;

return $this;
}

/**
 * Get the value of editura
 */ 
public function getEditura()
{
return $this->editura;
}

/**
 * Set the value of editura
 *
 * @return  self
 */ 
public function setEditura($editura)
{
$this->editura = $editura;

return $this;
}

/**
 * Get the value of an_aparitie
 */ 
public function getAn_aparitie()
{
return $this->an_aparitie;
}

/**
 * Set the value of an_aparitie
 *
 * @return  self
 */ 
public function setAn_aparitie($an_aparitie)
{
$this->an_aparitie = $an_aparitie;

return $this;
}

/**
 * Get the value of nr_pagini
 */ 
public function getNr_pagini()
{
return $this->nr_pagini;
}

/**
 * Set the value of nr_pagini
 *
 * @return  self
 */ 
public function setNr_pagini($nr_pagini)
{
$this->nr_pagini = $nr_pagini;

return $this;
}

/**
 * Get the value of pret
 */ 
public function getPret()
{
return $this->pret;
}

/**
 * Set the value of pret
 *
 * @return  self
 */ 
public function setPret($pret)
{
$this->pret = $pret;

return $this;
}

public function afiseazaCarte(){

    echo "<p>". $this->getTitlul().'' .$this->getAutor() . '  tiraj '.self::TIRAJ."</p>";



}





}




?>