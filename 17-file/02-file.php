<?php

//read file
 $path = 'new-folder/log.txt';
$lines = count(file($path));
$source = fopen($path, 'r');
for($i = 0;$i < $lines;$i++) {
    echo fgets($source).'<br>';
}

fclose($source);

//write in file
$data = 'DayanGroup'.PHP_EOL;
file_put_contents($path,$data,FILE_APPEND);

//read file
echo nl2br(file_get_contents($path));