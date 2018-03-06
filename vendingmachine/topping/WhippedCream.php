<?php

namespace vendingmachine\topping ;

use vendingmachine\Drink ;

class WhippedCream extends Topping {
    
    //méthode B (voir Cinnamon pour la A)
    public function getPrice():float {
        return $this->drink->getPrice() + 0.75 ;
    }
    
    public function getDescript():string {
        return $this->drink->getDescript() . " with delicious whipped cream" ;
    }
    
}