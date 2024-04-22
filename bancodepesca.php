<?php

class Bancodepesca 
// implements Recolectable

{
     use Tengocomida;
     private $cantidaddealimento;

     public function __construct() 
     {
         $this->cantidadAlimento = 225; // Valor por defecto para el banco de pesca
     }

    //  public function getAlimento() : int
    //  {
    //      return $this->cantidadAlimento;
    //   }




    //  protected function setCantidadAlimento(): int {
    //     return 225;
    // }


}

