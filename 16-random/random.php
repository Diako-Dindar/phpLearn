<?php

function generateRandomString($input)
{
    $string = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    $stringLength = strlen($string);
    $finalString = '';
    for ($i=0; $i < $input; $i++) {
        $finalString.=$string[rand(0,$stringLength-1)];
    }
    return $finalString;
}
echo generateRandomString(8);
