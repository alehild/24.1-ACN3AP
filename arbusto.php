<?php


class Arbusto 
// implements Recolectable 

{
     use Tengocomida; 

    private $cantidadAlimento ;

  
    public function __construct() {
         // Al crear una instancia de Arbusto, el atributo cantidadAlimento se setea a 125
         $this->cantidadAlimento = 125;
     }

    //  public function cantidadAlimento() {

    //     // cantidad total de alimento 
    //      return $this->cantidadAlimento;
    // }



//    public function getAlimento(): int {
//         return 125;
//     }
    
}









