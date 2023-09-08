<?php

/**
 * The PHP foreach Loop

* The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
* Syntax
    foreach ($array as $value) {
    code to be executed;
    }

* For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, 
* until it reaches the last array element.


* The following example will output the values of the given array ($colors):

    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $color) {
        echo "$color <br>";
    }


* The following example will output both the keys and the values of the given array ($age):

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $key => $value) {
        echo "$key = $value<br>";
    }
 
 */