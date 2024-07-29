<!-- datatypes -->

<?php

    $str = "This is a string"; // string
    var_dump($str); // gives size of var and datatype

    $int = 1234; // int
    var_dump($int);

    $flt = 12.34; // float
    var_dump($flt);

    $bol = true; // bool
    $bolFalse = false;
    var_dump($bol);
    echo "<br>On printing bool true : ".$bol."<br>On printing bool false :".$bolFalse."<br>";


    $arr = array(1234, "string", 14.6, false); // array (heterogeneous)
    var_dump($arr);
    echo "<br>accessing array element: ".$arr[2]."<br>";

   //  $obj = new MyClass(); // object

    $nul = null; // null 
    var_dump($nul);
?>