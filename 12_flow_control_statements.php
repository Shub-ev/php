<?php
    // flow control stements are used to change the execution flow of the program 
    // following are the flow control statements in php
    
    // 1. continue
    // 2. break
    // 3. goto


    // ********   continue and break    ******** //
    $a = 10;
    while($a){
        if($a == 6){
            $a--;
            continue; // this is a flow control statement this dosent allow firthur execution in current iteration and forces to next iteration
        }
        if($a == 2){
            $a--;
            break; // stops the execution of the program
        }
        echo $a." ";
        $a--;
    }


    // ********   goto and label    ******** //
    goto x;

    echo "this message will be ignored";
    x:
        echo "<br>this is a label code";
?>