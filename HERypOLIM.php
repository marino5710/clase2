<?php

class Transporte {
    protected int $ruedas; 
    protected int $capacidad; 
    public function __construct(int $ruedas, int $capacidad)
    {
            $this->ruedas= $ruedas; 
            $this->capacidad= $capacidad; 
    }

    public function getInfo() : string {
            return "El transporte tiene " . $this->ruedas . "ruedas y unca capacidad de ". $this->capacidad . "personas"; 
    }

    public function getRuedas() : int {
            return $this->ruedas;

    }
}


?>