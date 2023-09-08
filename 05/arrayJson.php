<?php

/**
* Definition and Usage
* The json_encode() function is used to encode a value to JSON format.

    $users = [
        "1"=>[
            "name" => "diako",
            "email" => "diako.dindar@gmail.com"
        ],
        "2"=>[
            "name" => "mona",
            "email" => "mona.saeidi6765@gmail.com"
        ]
    ]
* convert array to object
    $convert = json_encode($users);
* convert json to assoc array:
    json_decode($convert,1)
* convert json to object array:
    json_decode($convert)

*convert array to object array directly :
    (object) $users;
*/