<?php

/**
 * Callback Functions

* A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.

* Any existing function can be used as a callback function.
* To use a function as a callback function, pass a string containing the name of the function as the argument of another function:


 */

/* $upperAndLower = function (string $name = null, $callback) {
    $results = [
        'upper' => strtoupper($name),
        'lower' => strtolower($name)
    ];
    //return $results;
    if (is_callable($callback)) {
        call_user_func($callback, $results);
    }
};
//print_r($upperAndLower('diako'));
$upperAndLower('diako', function ($name) {
    echo 'Upper => '.$name['upper'];
    echo '<hr>';
    echo 'Lower => '.$name['lower'];
}); */
