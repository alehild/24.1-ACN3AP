<?php


class AldeanoFranco extends Aldeano 
{
    public function __construct() 
    {
        parent::__construct();
        $this->bonus = 0.25; // Bonus del 25%
    }

}