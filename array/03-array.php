<?php
$arr = ['name'=>'mona','family'=>'saeidi','age'=>35];
$number = [1,2,3,4,5,6,7,8,9,15,19,25,34,44,58,63,78,86,99,120,125,150];

$name = 'diako';
$family = 'dindar';
$age = 37;

function Odd(int $num){
    return ($num & 1);
}
function Even(int $num){
    return ( !($num & 1) );
}

function show($value)  {
    echo '<pre>';
    print_r($value);
    echo '</pre><hr>';
    
}

show(array_filter($number,'Odd'));
show(array_filter($number,'Even'));

$compactArray = compact('name','family','age');
show($compactArray);
foreach($compactArray as $key=>$value){
    echo 'Key = '.$key.' &  value = '.$value.'<br>';
}