<?php

namespace vendingmachine ;

use vendingmachine\Drink ;

class Coffee implements Drink {
    
    public $descript = "A dark coffee" ;
    public $price = 2.80 ;
    
    public function getPrice():float {
        return $this->price ;
    }
    
    public function getDescript():string {
        return $this->descript ;
    }
}
