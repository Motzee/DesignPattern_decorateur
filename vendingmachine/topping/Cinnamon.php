<?php

namespace vendingmachine\topping ;

use vendingmachine\Drink ;

class Cinnamon extends Topping {
    //méthode A (voir WhippedCream pour la B)
    protected $price = 0.25 ;
    protected $descript = " with cinnamon" ;
    
    public function getPrice():float {
        return $this->drink->getPrice() + $this->price ;
    }
    
    public function getDescript():string {
        $desc = $this->drink->getDescript().$this->descript ;
        return $desc ;
    }
    
}