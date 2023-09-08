<?php

/**
 * PHP User Defined Functions

* Besides the built-in PHP functions, it is possible to create your own functions.

    * A function is a block of statements that can be used repeatedly in a program.
    * A function will not execute automatically when a page loads.
    * A function will be executed by a call to the function.

* Create a User Defined Function in PHP

* A user-defined function declaration starts with the word function:

function functionName() {
  code to be executed;
} 

function sum($x = null,$y = null){
    return $x+$y;
}
echo sum(10,20);

function sumOfArray(){
    $arg = func_get_arg();
    return array_sum($arg);
}
echo sumOfArray(10,20,30);   output => 60
 */