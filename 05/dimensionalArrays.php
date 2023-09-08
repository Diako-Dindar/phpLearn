<?php
/**
 * dimensional Arrays
 * A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).
 
    $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    ); 
    * $cars[0][0] => Volvo
    * $cars[1][0] => BMW
    * $cars[2][0] => Saab
    * $cars[3][0] => Land Rover

    $users = [
        "1" => [
            "name" => "diako",
            "email" => "diako.dindar@gmail.com",
            "age" => 36
        ],
        "2" => [
            "name" => "mona",
            "email" => "mona.saeidi6765@gmail.com",
            "age" => 34
        ]
    ]
    * $users[1]['name'] => diako
    * $users[1]['email'] => diako.dindar@gmail.com

    * $users[2]['name'] => mona
    * $users[2]['email'] => moona.saeidi6765@gmail.com

 */