<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings and other functions in PHP</title>
</head>
<body>
    <?php

       // string word count in php;
       $str = "Hello pakistan how are you!";
       echo str_word_count($str);

       echo strpos($str, 'pakistan'); // returns index number of that word otherwise it will return false for no match;


    ?>
</body>
</html>