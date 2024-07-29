<!-- echo & print -->
<!-- *********  echo "text"  ********** this is the syntax of echo.... ""/''  -->
<!-- in echo keeping space between echo and message is compulsory -->

<!-- echo is more efficient that print -->
 <!-- echo can have multiple attributes -->

<?php

    // **************   01 echo   **************
    echo "This is a echo message<br>"; // we can print html elements using echo on html file
    echo "This is ", "a echo message<br>"; // usign multiple strings/attributes for single echo (,)
    echo "This is ". 'a echo message<br>'; // . is used for concatination hence here there is a single string
    //both single and double inverted commas are allowed
    echo ("This is a echo message<br>"); // this is also valid for echo
    echo (225+300)."<br>"; // numeric values are printed without ""/'' or it will become string

    // **************   02 print   **************
    print "This is a print message<br>"; //printing a string in html using print
    // print "This is ", "a print message<br>";  this is not possible using print func as it dosent take multiple attributes as echo
?>