<?php
    // Type casting in PHP.

    // (string): (string) statement converts data to string data type.

    $num = 3418;
    $numToStr = (string) $num; 
    echo $numToStr . "<br>";
    echo var_dump($numToStr) . "<br>";

    $decimal = 12.316;
    $decimalToStr = (string) $decimal;
    echo $decimalToStr . "<br>";
    
    echo var_dump($decimalToStr) . "<br>";


    // (int): (int) statement converts data to integer data type.

    $km = '25 kilometers'; 
    $km = 'dfd 25 kilometers'; // if we put any value before integer in the string then it will print 0 and data type will be int(0)
    $strToNum = (int) $km;
    echo $strToNum . "<br>";
    echo var_dump($strToNum) . "<br>";

// Other statements are thse

// (float) - Converts to data type Float
// (bool) - Converts to data type Boolean
// (array) - Converts to data type Array
// (object) - Converts to data type Object
// (unset) - Converts to data type NULL

?>