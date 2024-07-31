<?php
    // php have 4 types of loops
    // 1. while()
    // 2. do while()
    // 3. for loop
    // 4. for each


    // ********   while()    ******** // (initialization, condition, increment)
    $a = 10;
    while($a){ // 0 will ultimately becomes false
        echo $a . " ";
        $a--;
    }

    // ********   do while()    ******** // (initialization, increment, condition)
    // this executes atleas once without checking the condition 
    $b = 10;
    echo "<br>";
    do{
        echo $b." ";
        $b--;
    }while($b > 0); 


    // ********   for loop    ******** // (initialization, condition, increment)
    $c = 10;
    echo "<br>";
    for($c; $c > 0; $c--){
        echo $c." ";
    }


    // ********   for each    ********


    // ********   nested loop    ******** // is nothing but loop in loop
?>