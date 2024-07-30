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
?>