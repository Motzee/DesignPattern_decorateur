<?php

namespace vendingmachine\topping ;

use vendingmachine\Drink ;

class Cinnamon extends Topping {
    
    public function __construct(Drink $drink) {
        parent::__construct($drink) ;
    }
    
    public function getPrice():float {
        return $this->drink->getPrice() + 0.25 ;
    }
    
    public function getDescript():string {
        return $this->drink->getDescript() . " with cinnamon" ;
    }
    
}
