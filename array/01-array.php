<?php

$arr = ['name' => 'diako','family' => 'dindar','age' => 37];
print_r($arr);
function hr()
{
    echo '<hr>';
}
hr();
echo 'Count Of Array = '.count($arr);
hr();
echo 'Size Of Array = '.sizeof($arr);
hr();
print_r(array_keys($arr));
hr();
print_r(array_values($arr));
hr();
if(array_key_exists('name', $arr)) {
    echo 'key exists';
} else {
    echo 'key not exists';
}
hr();
if(in_array('dindar',$arr)){
    echo 'value exists';
}else{
    echo 'value not exists';
}
hr();

foreach($arr as $key=>$value){
    echo $key . ' : '.$value.'<br>';
}
hr();
