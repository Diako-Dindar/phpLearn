<?php
include '../customizeFunction/jdf.php';
$date = '2022-07-25 19:30:45';  //date & time in database

function DateToJalali(string $date){
    $separator = explode(' ',$date);

    list($year,$month,$day) = explode('-',$separator[0]);
    list($hour,$minutes,$second) = explode(':',$separator[1]);

    mktime($hour,$minutes,$second,$month,$day,$year);//convert to timestamp
    return jdate('Y-m-d H:i:s');
}

echo DateToJalali($date);