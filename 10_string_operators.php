<?php
    // we have 2 main string operators 
    // 1. (.) dot operator for string concatination
    // 2. (.=) concatination and assignment // there is not space in .=
    $first = "hello";
    $message = $first." world"; // using (.) operator for string concatination
    $message .= " to php"; // another method to conatinate string
 
    echo $message;
?>