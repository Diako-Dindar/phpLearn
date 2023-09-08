<?php

/**
 * What is a Cookie?

* A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer.
* Each time the same computer requests a page with a browser, it will send the cookie too.
* With PHP, you can both create and retrieve cookie values.
* Create Cookies With PHP

* A cookie is created with the setcookie() function.

Syntax:
    setcookie(name, value, expire, path, domain, secure, httponly);

* Only the name parameter is required. All other parameters are optional.

* Example

    $cookie_name = "user";
    $cookie_value = "John Doe";

    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }
    else{
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

* Modify a Cookie Value

* To modify a cookie, just set (again) the cookie using the setcookie() function:
* Example :

$cookie_name = "user";
$cookie_value = "Alex Porter";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

* Delete a Cookie
* To delete a cookie, use the setcookie() function with an expiration date in the past:
* Example :
* set the expiration date to one hour ago

setcookie("user", "", time() - 3600);
echo "Cookie 'user' is deleted.";

 */
