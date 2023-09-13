<?php

echo 'file_exist (02-file.php) : '. file_exists('02-file.php');
echo '<hr>';
echo 'Is_File (02-file.php) : '. is_file('02-file.php');
echo '<hr>';
echo 'Is_Dir (02-file.php) : '.is_dir('02-file.php');
echo '<hr>';
if(!file_exists('new-folder')) {
    echo 'new-folder is create. '.mkdir('new-folder');
} else {
    echo "<div style='color:red;font-family:roboto;font-size 20px;'>(new-folder) is already !!!!</div>";
}

echo '<hr>';
echo 'Is_Dir (new-folder) : '.is_dir('new-folder');
echo '<hr>';
if(file_exists('02-file.php')){
    unlink('02-file.php');
}else{
    echo " <div style='color:red;font-family:roboto;font-size 20px;'>the file in not exists!!!</div> ";
}
$createFile = fopen('new-folder/log.txt','a+');
for($i=1; $i<10; $i++){
    $txt = " Log[$i] =>".' '.date('Y-m-d H:i:s',time()).PHP_EOL;
    fwrite( $createFile,$txt);
}

fclose($createFile);


