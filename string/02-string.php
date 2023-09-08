<?php
$str = 'transfer money your account';
$arr = ['diako','mona','dayan'];

$separator = explode(' ',$str);
foreach($separator as $key=>$value){
    ?>
    <table border="2px" width="50%">
        <tr>
            <td width="30px"><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
    </table>
    <?php
}
echo "<hr>";
echo "Convert Array to String By Implode : ".implode(' ',$arr);
echo "<hr>";
echo 'substr = '.substr($str,9);
echo "<hr>";
echo 'strstr = '.strstr($str,'money');
echo "<hr>";
echo 'str_replace = '.str_replace('money','MONEY',$str);
echo "<hr>";
echo 'str_shuffle = '.str_shuffle('dayan');