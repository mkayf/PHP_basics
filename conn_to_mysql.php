<?php
    $server_name = 'localhost';
    $username = 'root';
    $password = '';
    $testDB = 'testDB';
    $connection = mysqli_connect($server_name, $username, $password, $testDB);

    if($connection){
        echo '<h1>Connection successful</h1>';
    }
    else{
        echo '<h1>Connection failed!</h1>';
        die('<h1>Connection failed!</h1>' . mysqli_connect_error());        
    }

    // DATABASE 

    // $SQL = "CREATE DATABASE testDB";

    // $SQL = "CREATE TABLE employee_data(
    //     ID INT PRIMARY KEY AUTO_INCREMENT,
    //     e_name VARCHAR(100) NOT NULL,
    //     e_role VARCHAR(100) NOT NULL
    // )";

    

    // $SQL = "INSERT INTO employee_data (e_name, e_role) VALUES ('Muhammad Kaif', 'MERN stack')";

    if(mysqli_query($connection, $SQL)){
        // echo '<h1>Database created successfully!</h1>';
        // echo '<h1>Table created succesful</h1>';
        echo '<h1>Data inserted!</h1>';
    }   
    else{
        echo '<h1>Database creation failed</h1>';
    }

?>