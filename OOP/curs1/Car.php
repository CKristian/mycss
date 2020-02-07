<?php

class Car{

protected $marca='Ford';
public $model='Mustang';
private $numarUsi=7;
public static $numarRoti=4;

public function afiseazaNrUsi(){
    return$this->numarUsi;
}
function schimbaNrUsi($nr){
    if($nr>=5){
    echo 'NUmarul de usi este gresit';
}
else{
    $this->numarUsi=$nr;
}

}



/**
 * Get the value of model
 */ 
public function getModel()
{
return $this->model;
}

/**
 * Set the value of model
 *
 * @return  self
 */ 
public function setModel($model)
{
$this->model = $model;

return $this;
}

/**
 * Get the value of numarRoti
 */ 
public function getNumarRoti()
{
return self::$numarRoti;
}

/**
 * Set the value of numarRoti
 *
 * @return  self
 */ 
public function setNumarRoti($numarRoti)
{
$this->numarRoti = $numarRoti;

return $this;
}
}








?>