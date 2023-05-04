<?php

class Producto {
    #DEFINICIO DE LOS ATRIBUTOS
    public string $nombre;
    public int $precio; 
    public bool $disponible; 

     #metodo constructor, este se ejecuta al efectuar la instancia
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        #SE LES DA VALORES A LOS ATRIBUTOS CON LOS PARAMETROS QUE RECIBE EL METODO CONSTRUCTOR
        this->nombre = $nombre;
        this->precio = $precio;
        this->disponible = $disponible;

    }

        #DEFINICION DE METODOS
        public function mostrarProducto(){
            echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio; 
        }
}

//INSTANCIA DE LA CLASE EN EL PRIMER OBJETO 



?>