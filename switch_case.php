<?php
    $percentage = 65;

    switch ($percentage) {
        case ($percentage > 90):
            echo 'A+ Grade';
            break;
        case ($percentage > 80):
            echo 'A Grade';
            break;
        case ($percentage > 70):
            echo 'B Grade';
            break;
        case ($percentage > 60):
            echo 'C Grade';
            break;
        case ($percentage > 50):
            echo 'D Grade';
            break;
        case ($percentage > 40): 
            echo 'E Grade';
            break;
        case ($percentage > 100):
            echo 'Invalid Percentage';
            break;
        default:
            echo 'Lag gaye :)';
            break;
    }


    $name = 'kaif';
    $friend1 = 'Samad';
    $friend2 = 'Atiq';

    function printNames (){
        echo $GLOBALS['name'];
    }
    
    



?>