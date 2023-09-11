<?php
include '../customizeFunction/jdf.php';
$date = '2022-07-20 19:35:45';  //date & time in database

function DateToJalali(string $date){
    $separator = explode(' ',$date);

    list($year,$month,$day) = explode('-',$separator[0]);
    list($hour,$minutes,$second) = explode(':',$separator[1]);

    $mk = mktime($hour,$minutes,$second,$month,$day,$year);//convert to timestamp
    return jdate('Y-m-d H:i:s',$mk);
}

echo DateToJalali($date);