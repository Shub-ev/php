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


    // ******** 03 ********  passing values to the function as value and reference
    $num5 = 10;
    echo $num5.'<br>';
    function func1($num5){
        --$num5."<br>"; // makes 9
    }
    func1($num5);
    echo $num5.'<br>'; // prints 10 because function updates copied value not actual value

    function func2(&$num5){
        --$num5."<br>"; // makes 9
    }
    func2($num5);
    echo $num5.'<br>'; // again prints 9 because func2 updated reference of that value i.e. actual value 
?>