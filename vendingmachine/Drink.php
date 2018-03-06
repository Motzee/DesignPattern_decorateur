<?php

namespace vendingmachine ;

interface Drink {
    
    public function getPrice():float ;
    
    public function getDescript():string ;
    
}

/*
il aurait aussi été possible de faire de Drink une classse où seraient définies les méthodes, avec juste des propriétés 
 */