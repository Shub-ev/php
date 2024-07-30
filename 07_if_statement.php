<!-- if else and else if statements -->

<?php
    $age = 70;

    if($age < 21 and $age > 18){
        echo "You are eligible";
    }
    else if($age > 60){
        echo 'Get retired';
    }
    else{
        echo "you are too young";
    }
?>