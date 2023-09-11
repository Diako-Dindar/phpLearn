<?php
date_default_timezone_set('Europe/Istanbul');
echo 'date : '.date('d-m-Y');
echo "<hr>";
echo 'Time : '.date('H:i:s');
echo "<hr>";
echo "Date & Time : ".date('d-m-Y H:i:s');
echo "<hr>";
echo 'Time -> timestamp :'.time();
echo "<hr>";
$time = time();
echo 'show date Based on timestamp : '.date('d-m-Y',$time);
echo "<hr>";
$mk = mktime(17,45,30,12,29,2022);
echo 'show mktime : '.$mk;
echo "<br>";
echo date('d-m-Y H:i:s',$mk);

