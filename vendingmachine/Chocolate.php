<?php

namespace vendingmachine ;

use vendingmachine\Drink ;

class Chocolate implements Drink {
    
    public $descript = "A soft chocolate" ;
    public $price = 3.20 ;
    
    public function getPrice():float {
        return $this->price ;
    }
    
    public function getDescript():string {
        return $this->descript ;
    }
}
