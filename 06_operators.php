<!-- operators -->

<?php
    $num1 = 10;
    $num2 = 20;

    // **************   arithmatic operators   **************
    echo "<h2>Addition(+) : ".$num1 + $num2. "</h2><br>"; 
    echo "<h2>Subtraction(-) : ".$num1 - $num2. "</h2><br>"; 
    echo "<h2>Multiplication(*) : ".$num1 * $num2. "</h2><br>"; 
    echo "<h2>Exponential : ".$num1 ** $num2. "</h2><br>"; 
    echo "<h2>Division(/) : ".$num1 / $num2. "</h2><br>"; 
    echo "<h2>Modulus : ".$num1 % $num2. "</h2><br>"; 
    echo "<h2>Increment : ".++$num1. "</h2><br>"; 
    echo "<h2>Decrement : ".--$num1. "</h2><br>"; 


    // **************  assignment operator   **************
    $assign = 20; // assignment / initialization
    $assign += 20; // add assignment
    $assign -= 20; // subtract assignment
    $assign *= 2;  // multiplication assignment
    $assign /= 2;  // divide and assignment
    $assign %= 2;  // modulo assignment
    $assign ** 2;  // expo assignment
?>