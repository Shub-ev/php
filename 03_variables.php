<!-- variables -->

<?php
    // **************   creating normal variable   **************
    $name = "John Potter"; // syntax to declare variable
    echo $name;
    print "<h1>".$name."</h1>"; // string concatination using . operator

    // **************   creating constant variable   ************** (value should not be changed)
    // syntax for making a variable constant => *** define(name, value, case-insensitive(bool->default=false)) ***

    define("age", 20); //case-insensitive is set false by default
    // define("age", 20);   re creating const with same name is not allowed
    echo age;
    // echo Age; this will not work as case-insensitive parameter is set false;

    // define("name", "shubham", true); //case-insensitive is set true explicitly
    // echo name;
    // echo Name;         *****************    declaration of case-insensitive constants in now depricated   ***********************
    // echo NAME;
?>