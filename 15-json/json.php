<?php

$person = [
    "name"   =>"diako",
    "email"  =>"diako.dindar@gmail.com",
    "age"    =>37,
    "gender" =>"male"
];
// CONVERT ARRAY TO JSON
$convertToJson = json_encode($person,JSON_FORCE_OBJECT);
echo $convertToJson."<hr>";
// CONVERT JSON TO ARRAY
$json = '{"name":"diako","email":"diako.dindar@gmail.com","age":37,"gender":"male"}';
$convertToArray = json_decode($json,true);
    echo '<pre>';
    print_r($convertToArray);
    echo '</pre>';
echo $convertToArray['email'];
echo "<hr>";
$convertToArray = json_decode($json);
echo $convertToArray->email;