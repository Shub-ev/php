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
    $assign **= 2;  // expo assignment
    $assign .= "this is string concatination and assignment";

    $assign = 10;

    // **************  comparison operator   **************
    echo "<br><br>";
    // comparison returns 1 if true/ return ""/black if false
    echo $assign == 10;  // returns 1
    echo $assign == 12; // prints "" nothing as it results false
    echo $assign === 10;  // striclty equal to (value as well as datatype should be same) // returns 1
    echo $assign != 12; // not equal to // returns 1
    echo $assign <> 12; // not equal to // returns 1
    echo $assign !== '12'; // not equal and not type 
    echo $assign > 10;  // returns ''
    echo $assign < 10;  // returns ''
    echo $assign <= 10;
    echo $assign >= 10;
    //space ship operator
    echo $assign <=> 20; // -1, 0, 1 based on lesser equal and larger than


    // **************  logical operator   **************
    echo "<br><br>";
    echo $assign && 1;
    echo $assign and 1;
    echo $assign || 0;
    echo $assign or 0;
    echo $assign xor $assign; // xor true + true == false...... false + false == false 
?>