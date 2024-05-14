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
    echo "<h1>Welcome to the Web App</h1>";
    echo "<h2>$user_name</h2>";


    ?>
</body>
</html>