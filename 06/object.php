<?php

/**
 * create Object in php :
    $car = new stdClass;
    $car->name = 'Benz';
    $car->model = 2022; 
* call by reference
    $car2 = $car;
    $car2->name = 'Bmw';
    echo $car->name;     //Bmw
    echo $car2->name;    //Bmw

    $car3 = clone $car;
    $car3->name = 'Audi';
    echo $car->name;     //Bmw
    echo $car3->name;    //Audi
 */
