<?php

namespace vendingmachine ;

abstract class Drink {
    
    public function getPrice():float {
        return $this->price ;
    }
    
    public function getDescript():string {
        return $this->descript ;
    }
    
}

/*
il aurait aussi été possible de faire de Drink une interface
 */