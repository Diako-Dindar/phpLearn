<?php
$str = 'dayan group';
$hash = md5($str);
echo 'md5 = '.md5($str);
echo "<hr>";
echo 'strlen(hash) = '.strlen($hash);
echo "<hr>";
echo 'substr (hash) = '.str_shuffle( substr($hash,25) );
echo "<hr>";
$script = "<script>alert(hacked)</script>";
echo 'htmlentities = ',htmlentities($script);
echo "<hr>";
echo 'strip_tags = '.strip_tags($script);
echo "<hr>";
echo 'strpos = '.strpos($str,'g');
