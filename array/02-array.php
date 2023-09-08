<?php
$arr = ['name'=>'dayan','family'=>'dindar','age'=>1];
function show($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre><hr>';
}
show($arr);
echo 'array_search (give Value And return key ) '.array_search('dayan',$arr);
echo '<hr>';
show( array_slice($arr,1) );
array_push($arr,'blue','green');
show($arr);