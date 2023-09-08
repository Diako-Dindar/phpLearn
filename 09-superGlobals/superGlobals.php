<?php

/**
* $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).
* PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
* The example below shows how to use the super global variable $GLOBALS:

$x = 75;
$y = 25;
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;

* PHP $_SERVER:

* $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
* The example below shows how to use some of the elements in $_SERVER:
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];

* PHP $_REQUEST:

* PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
* The example below shows a form with an input field and a submit button. 
* When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. 
* In this example, we point to this file itself for processing form data. 
* If you wish to use another PHP file to process form data, replace that with the filename of your choice. 
* Then, we can use the super global variable $_REQUEST to collect the value of the input field:

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
 */

