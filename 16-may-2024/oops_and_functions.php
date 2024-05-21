<?php
    // OOPS IN PHP:

    class car{
        function drive($car_name){
            echo "$car_name is on drive mode";
        }

        function neutral($car_name){
            echo "$car_name is on neutral mode";
        }

        function parking($car_name){
            echo "$car_name is on parking mode";
        }

        function reverse($car_name){
            echo "$car_name is on reverse mode";
        }
    }

    $Honda = new car();
    $Honda -> drive('Civic');

?>