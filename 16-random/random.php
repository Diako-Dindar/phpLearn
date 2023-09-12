<?php

function generateRandomString($length)
{
    $string = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM!@#$%&";
    $stringLength = strlen($string);
    $finalString = 'NV-';
    for ($i=0; $i < $length; $i++) {
        $finalString.= $string[ rand(0,$stringLength -1) ];
    }
    return $finalString;
}
echo generateRandomString(6);
