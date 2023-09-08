<?php

$person = [
    "name"   =>"diako",
    "email"  =>"diako.dindar@gmail.com",
    "age"    =>37,
    "gender" =>"male"
];

$convertToJson = json_encode($person);
echo $convertToJson."<hr>";
$json = '{"name":"diako","email":"diako.dindar@gmail.com","age":37,"gender":"male"}';
$convertToArray = json_decode($json,true);
var_dump($convertToArray);
echo $convertToArray['email'];
echo "<hr>";
$convertToArray = json_decode($json);
echo $convertToArray->email;