<?php

/**
*There are two ways to create indexed arrays:
*The index can be assigned automatically (index always starts at 0), like this:
    $cars = array("Volvo", "BMW", "Toyota");

*or the index can be assigned manually:
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota"; 

*Example:
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

*Loop Through an Indexed Array:
    
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars); //3
    for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
 
 */