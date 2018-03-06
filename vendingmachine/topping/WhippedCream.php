<?php

namespace vendingmachine\topping ;

use vendingmachine\Drink ;

class WhippedCream extends Topping {
    
    public function __construct(Drink $drink) {
        parent::__construct($drink) ;
    }
    
    public function getPrice():float {
        return $this->drink->getPrice() + 0.75 ;
    }
    
    public function getDescript():string {
        return $this->drink->getDescript() . " with delicious whipped cream" ;
    }
    
}