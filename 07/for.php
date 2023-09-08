<?php

/**
 * The for loop is used when you know in advance how many times the script should run.
* Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

* Parameters:

    * init counter: Initialize the loop counter value
    * test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
    * increment counter: Increases the loop counter value

* The example below displays the numbers from 0 to 10:

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

$users = array(
    ['diako',36],
    ['mona',34],
    ['dayan',1]
);
for($i=0;$i<sizeOf($users);$i++)
echo "name  = > {$users[i][0]}<br>";
 */