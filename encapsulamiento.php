<?php

class Producto {
    #DEFINICION DE LOS ATRIBUTOS
    protected string $nombre; 
    public int $precio; 
    public bool $disponible; 

    #METODO CONSTRUCTOR, SE EJECUTA AL EFECTUAR LA INSTANCIA
    public function __construct(string $nombre, int $precio, bool $disponible) 
    {

        #SE LES DA VALOR A LOS ATRIBUTOS CON LOS PARAMETROS QUE RECIBE EL METODO CONSTRUCTOR
        $this-> $nombre; 
        $this-> $precio;
        $this-> $disponible;
    }

    
}


?>