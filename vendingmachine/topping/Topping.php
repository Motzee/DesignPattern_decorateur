<?php

namespace vendingmachine\topping ;

use vendingmachine\Drink ;

abstract class Topping extends Drink {
    
    protected $drink ;
    
    public function __construct(Drink $drink) {
        $this->drink = $drink ;
    }
    
    public function getPrice():float {
        return $this->drink->getPrice() + $this->price ;
    }
    
    public function getDescript():string {
        return $this->drink->getDescript().$this->descript ;
    }
    
}
