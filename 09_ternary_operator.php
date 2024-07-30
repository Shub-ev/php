<!-- ternary operator  -->
<!-- (condition) ? if_true : if_false -->

<?php
 
    $age = 10;

    $res =  ($age > 18) ? "eligible for voting" : "not eligible for voting";
    // ($age > 18) ? $res = "eligible for voting" : $res = "not eligible for voting";

    echo $res;
?>