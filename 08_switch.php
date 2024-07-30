<?php

    $name = "Police";

    //switch type 1 
    switch($name){
        case "Police":
            echo "I am Police";
            break;
        case "Driver":
            echo "I am Driver";
            break;
        case "Chef":
            echo "I am Chef";
            break;
        default:
            echo "Default";
    }

    echo "<br>";
    $name = "Chef";

    //switch type 2
    switch($name):
        case "Police":
            echo "I am Police";
            break;
        case "Driver":
            echo "I am Driver";
            break;
        case "Chef":
            echo "I am Chef";
            break;
        default:
            echo "Default";
    endswitch;

    //switch type 3
    $multi = 2;
    echo "<br>";
    switch($multi):
        case 1:
            echo "One";
            break;
        case 2: case 3: case 4: // we can use multiple values for same code
            echo "Two Three Four";
            break;
    endswitch;

    //switch type 4 
    $age = 20;
    echo "<br>";
    switch($age):
        case ($age > 18 && $age < 60):
            echo "You are eligible for voting";
            break;
        case ($age >= 60):
            echo "Too old";
            break;
        case ($age <= 18):
            echo "Too young";
            break; 
    endswitch;
?>