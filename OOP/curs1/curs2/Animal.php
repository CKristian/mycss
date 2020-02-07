<?php

class Animal {

    private $familie;
    protected $mancare;
    protected $culoare;
    public $greutate;
    private $nume;

    public static $nrPicioare;
    public const NR_OCHI = 2;


    public function __construct($nume){
        $this->nume=$nume;
        $this->greutate=45;
        echo "S-a nascut un animal cu numele $this->nume!";
    }

    public function __destruct(){
        
        echo "Animalul a fost sters din memorie!";
   

    }
    public function __clone(){
        echo "Atentie s a clonat animalul cu numele $this->nume!";
    }

    public function __toString(){
        return "Numele este $this->nume cu greutatea ".$this->getGreutate();
    }








    /**
     * Get the value of familie
     */ 
    public function getFamilie()
    {
        return $this->familie;
    }

    /**
     * Set the value of familie
     *
     * @return  self
     */ 
    public function setFamilie($familie)
    {
        $this->familie = $familie;

    }

    /**
     * Get the value of mancare
     */ 
    public function getMancare()
    {
        return $this->mancare;
    }

    /**
     * Set the value of mancare
     *
     * @return  self
     */ 
    public function setMancare($mancare)
    {
        $this->mancare = $mancare;

    }

    /**
     * Get the value of culoare
     */ 
    public function getCuloare()
    {
        return $this->culoare;
    }

    /**
     * Set the value of culoare
     *
     * @return  self
     */ 
    public function setCuloare($culoare)
    {
        $this->culoare = $culoare;
    }

    /**
     * Get the value of greutate
     */ 
    public function getGreutate()
    {
        return $this->greutate;
    }

    /**
     * Set the value of greutate
     *
     * @return  self
     */ 
    public function setGreutate($greutate)
    {
        $this->greutate = $greutate;

    }

    /**
     * Get the value of nrPicioare
     */ 
    public static function getNrPicioare()
    {
        return self::$nrPicioare;
    }

    /**
     * Set the value of nrPicioare
     *
     * @return  self
     */ 
    public static function setNrPicioare($nrPicioare)
    {
        self::$nrPicioare = $nrPicioare;
    }


    public function mananca($cantitate){
        if ($cantitate >=5){
            $this->greutate=$this->greutate+ $cantitate/3;
        }
    echo 'Acest animal acum mananca '. $cantitate. 'Kg de '.$this->getmancare();
   
}
    public function doarme($timp){
        $data_curenta=date('H');
        echo "Acest animal doarme pana la ora ".($data_curenta+$timp);


    }

    public function comunica($fraza){
        echo "Acest animal cand este vesel face: ".$fraza;


    }


}

?>