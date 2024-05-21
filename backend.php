<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dashboard</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
    $user_name = $_GET["user_name"];
    $password = $_GET["password"];

    if($user_name == 'mkayf' && $password == 'hello123'){
        echo "<h1>Welcome to the Web <br> $user_name</h1>";
    }
    else{
        echo "<h1>Wrong credentials</h1>";
    }

    ?>
</body>
</html>