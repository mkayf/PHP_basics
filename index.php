<?php
$name = "Kaif <br>";
echo $name;

// global scope: A global scoped variable cannot be accessed from inside the function.

$x = 10;
function test(){
    echo "The value of x is $x <br>"; // This will throw an error because global variable cannot be accessed inside the function.
}
// test();
$country = 'Pakistan';

function countryCity ($city){
    global $country; 
    echo "$country " . "$city"; // The global keyword is used to access a global variable from within a function.
}
// countryCity("Karachi");

$num1 = 1;
$num2 = 2;
$num3 = 3;

function sum(){
   echo $GLOBALS['num1'] + $GLOBALS['num2'] + $GLOBALS['num3']; // Global index keyword to store variable;
}
// sum();


function counter(){
    static $a = 0;
    echo $a;
    $a++;
}

?>