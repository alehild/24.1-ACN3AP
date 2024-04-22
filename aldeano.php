<?php

class Aldeano 
// implements Recolector 
{
     use PuedoRecolectar;

     protected $bonus = 0;

    public function __construct() {
        $this->velocidadRecoleccion = 18; // Valor por defecto
        
    }

    public function getBonus() {
        return $this->bonus;
    }
}
   
    //  public function recolectar($arbusto) {
    //      $tiempo = ceil($arbusto->cantidadAlimento() / $this->velocidadRecoleccion);
    //      echo "Recolecté todo el alimento en $tiempo minutos. <br>";
    // }

    // public function recolectar(Recolectable $recolectable)
    // {
    //     $this->recolectar($recolectable); 
    //     echo "Recolecté todo el alimento en $tiempo minutos. <br>";
    // }
     



?>



