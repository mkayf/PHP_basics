<?php
    // strtoupper() returns the string in upper case.
    $name = "kaif is a good boy and kaif is a programmer";

    echo "1. The length of '$name' is " . strlen($name) .  "<br>";

    echo "2. The word count of '$name' is " . str_word_count($name) .  "<br>";
    
    echo "3. The reverse of '$name' is " . strrev($name) . "<br>";

    echo "4. The position of 'kaif' in $name is " . strpos($name, 'kaif') .  "<br>"; 

    echo "5. Replace 'programmer' in '$name' with " . str_replace('programmer', 'software developer', $name);
?>