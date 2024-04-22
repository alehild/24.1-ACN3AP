<?php

class Pesquero 
// implements Recolector
{
     use PuedoRecolectar;
    private $velocidadRecoleccion;

     public function __construct() {
         $this->velocidadRecoleccion = 18; 
    }

   
    //  public function recolectar($bancoDePesca) {
    //      $tiempo = ceil($bancoDePesca->getAlimento() / $this->velocidadRecoleccion);
    //      echo "Recolecté todo el alimento del banco de pesca en $tiempo minutos. <br>";
    // }

    //d remplazo
    
    // public function recolectar(Recolectable $recolectable) {
    //     $this->recolectar($recolectable); 
    // }

 
}


