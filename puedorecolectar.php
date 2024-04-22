<?php
    
    // trait PuedoRecolectar {
    // public function recolectar($recolectable) {
    //     $tiempo = ceil($recolectable->getAlimento() / $this->velocidadRecoleccion);
    //      echo "Recolecté todo el alimento en $tiempo minutos. <br>";
    // }

    //  }

trait PuedoRecolectar {
    public function recolectar($recolectable) {
        $velocidad = $this->velocidadRecoleccion;
        if ($this instanceof Aldeano && $this->getBonus() !== null) {
// Si el aldeano tiene un bonus, ajustar la velocidad
            $velocidad += $velocidad * ($this->getBonus() / 100);
        }
        $tiempo = ceil($recolectable->getAlimento() / $velocidad);
         echo "Recolecté todo el alimento en $tiempo minutos. <br>";
    }
    }


?>