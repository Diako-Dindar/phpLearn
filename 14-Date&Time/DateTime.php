<?php
include '../customizeFunction/jdf.php';

date_default_timezone_set('Europe/Istanbul');
echo "Date & Time : ". date('Y-m-d H:i:s');
echo "<hr>";
$time = time();
echo date('Y-m-d H:i:s',$time);
echo "<hr>";
$mktime = mktime(10,30,45,12,29,2022);
echo $mktime;
echo "<br>";
echo date('Y-m-d H:i:s',$mktime);

echo "<hr>";
echo jdate('Y-m-d H:i:s','','','Europe/Istanbul');
echo "<hr>";


// convert date to timestamp and convert timestamp to jalali
$randomDate = '2022-12-31';

function convertDate($date){
    list($year,$mounth,$day) = explode('-',$date);
    $timestamp = mktime(10,null,null,$mounth,$day,$year);
    return jdate('Y-m-d',$timestamp);
    
}
echo $randomDate;
echo "<br>";
echo convertDate($randomDate);
