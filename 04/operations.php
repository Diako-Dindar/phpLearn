<?php
/*
    1=> Arithmetic operators:

        + 	Addition 	    $x + $y 	Sum of $x and $y 	
        - 	Subtraction 	$x - $y 	Difference of $x and $y 	
        * 	Multiplication 	$x * $y 	Product of $x and $y 	
        / 	Division 	    $x / $y 	Quotient of $x and $y 	
        % 	Modulus 	    $x % $y 	Remainder of $x divided by $y 	
        ** 	Exponentiation 	$x ** $y 	Result of raising $x to the $y'th power

    2=> Assignment operators:

        x = y 	x = y 	    The left operand gets set to the value of the expression on the right 	
        x += y 	x = x + y 	Addition 	
        x -= y 	x = x - y 	Subtraction 	
        x *= y 	x = x * y 	Multiplication 	
        x /= y 	x = x / y 	Division 	
        x %= y 	x = x % y 	Modulus

    3=> Comparison operators:

        == 	    Equal 	                    $x == $y 	    Returns true if $x is equal to $y 	
        === 	Identical 	                $x === $y 	    Returns true if $x is equal to $y, and they are of the same type 	
        != 	    Not equal 	                $x != $y 	    Returns true if $x is not equal to $y 	
        <> 	    Not equal 	                $x <> $y 	    Returns true if $x is not equal to $y 	
        !== 	Not identical 	            $x !== $y 	    Returns true if $x is not equal to $y, or they are not of the same type 	
        > 	    Greater than 	            $x > $y 	    Returns true if $x is greater than $y 	
        < 	    Less than 	                $x < $y 	    Returns true if $x is less than $y 	
        >= 	    Greater than or equal to 	$x >= $y 	    Returns true if $x is greater than or equal to $y 	
        <= 	    Less than or equal to 	    $x <= $y 	    Returns true if $x is less than or equal to $y 	
        <=> 	Spaceship 	                $x <=> $y 	    Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

    4=> Increment/Decrement operators:

        ++$x 	Pre-increment 	Increments $x by one, then returns $x 	
        $x++ 	Post-increment 	Returns $x, then increments $x by one 	
        --$x 	Pre-decrement 	Decrements $x by one, then returns $x 	
        $x-- 	Post-decrement 	Returns $x, then decrements $x by one

    5=> Logical operators:

        and 	And 	$x and $y 	True if both $x and $y are true 	
        or 	    Or 	    $x or $y 	True if either $x or $y is true 	
        xor 	Xor 	$x xor $y 	True if either $x or $y is true, but not both 	
        && 	    And 	$x && $y 	True if both $x and $y are true 	
        || 	    Or 	    $x || $y 	True if either $x or $y is true 	
        ! 	    Not 	!$x 	    True if $x is not true

    6=> String operators:

        . 	Concatenation 	            $txt1 . $txt2 	Concatenation of $txt1 and $txt2 	
        .= 	Concatenation assignment 	$txt1 .= $txt2 	Appends $txt2 to $txt1

    7=> Array operators:
    
        + 	    Union 	        $x + $y 	Union of $x and $y 	
        == 	    Equality 	    $x == $y 	Returns true if $x and $y have the same key/value pairs 	
        === 	Identity 	    $x === $y 	Returns true if $x and $y have the same key/value pairs in the same order and of the same types 	
        != 	    Inequality 	    $x != $y 	Returns true if $x is not equal to $y 	
        <> 	    Inequality 	    $x <> $y 	Returns true if $x is not equal to $y 	
        !== 	Non-identity 	$x !== $y 	Returns true if $x is not identical to $y

    8=> Conditional assignment operators:

        ?: 	Ternary 	$x = expr1 ? expr2 : expr3 	    Returns the value of $x.
            The value of $x is expr2 if expr1 = TRUE.
            The value of $x is expr3 if expr1 = FALSE

            example:
                // if empty($user) = TRUE, set $status = "anonymous"
                echo $status = (empty($user)) ? "anonymous" : "logged in";  output=>anonymous
               
                $user = "John Doe";
                // if empty($user) = FALSE, set $status = "logged in"
                echo $status = (empty($user)) ? "anonymous" : "logged in";  output=>logged in
                   

*/