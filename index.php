<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}
spl_autoload_register('myLoader');

use vendingmachine\Coffee ;
use vendingmachine\Chocolate ;
use vendingmachine\topping\Cinnamon ;
use vendingmachine\topping\WhippedCream ;

$coffee = new Coffee() ;
echo "<p>".$coffee->getDescript() ;
echo  " (".$coffee->getPrice()." €)</p>" ;

$chocolateCinnamon = new Cinnamon(new Chocolate()) ;
echo "<p>".$chocolateCinnamon->getDescript() ;
echo  " (".$chocolateCinnamon->getPrice()." €)</p>" ;

$chocolateCinnamonCream = new WhippedCream($chocolateCinnamon) ;
echo "<p>".$chocolateCinnamonCream->getDescript() ;
echo  " (".$chocolateCinnamonCream->getPrice()." €)</p>" ;