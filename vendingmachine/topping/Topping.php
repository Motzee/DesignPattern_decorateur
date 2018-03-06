<?php

namespace vendingmachine\topping ;

use vendingmachine\Drink ;

abstract class Topping extends Drink {
    
    protected $drink ;
    
    public function __construct(Drink $drink) {
        $this->drink = $drink ;
    }
}
