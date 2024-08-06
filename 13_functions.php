<!-- function in php -->

<?php 
    //syntax
    // function function_name(){
    // };

    $iterator;
    $iterator = 10;

    // ******** 01 ********  function declaration with one para
    echo $iterator.'<br>';
    function add($num){ // function declaration with a parameter
        return $num + 10;
    }
    $iterator = add($iterator); // calling a function along with parameter
    echo $iterator.'<br>';


    // ******** 02 ********  function declaration with two paras having default values
    function add2($num1=10, $num2=30){ // function declaration with 2 parameters
        // here if want to work with default then all arguments should have some default 
        return $num1 + $num2;
    }
    echo add2(30)."<br>"; // if function takes 2 arguments then call should also contain 2 paras
?>