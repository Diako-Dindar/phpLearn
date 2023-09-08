<?php
$arr = ['diako','mona','dayan'];
echo "Count :". count($arr)."<hr>";
echo "SizeOf :". sizeof($arr)."<hr>";
print_r(array_keys($arr));
echo "<hr>";
var_dump(array_values($arr));
echo "<hr>";
if (array_key_exists(1, $arr)) {
    echo "key exist";
}
    else{
        echo "key not exist";
    }
echo "<hr>";
if(in_array('mona',$arr)){
    echo "value exist";
}else{
    echo "value not exist";
}
echo "<hr>";
$name = "diako";
$email = "diako.dindar@gmail.com";
$age = 37;
$makeArray = compact('name','email','age');
echo "<pre>";
print_r($makeArray);
echo "</pre>";
echo "<hr>";

function oddArray(int $val){
    return ($val & 1);
}

$num = [1,2,3,4,5,6,7,8,9];
echo "<pre>";
print_r(array_filter($num,'oddArray'));
echo "</pre>";
echo "<hr>";
