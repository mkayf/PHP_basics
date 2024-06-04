<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up to this website</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</head>
<body>
<?php
    include('connection.php');

    if(isset($_POST["submit"])){
        $u_name = $_POST["u_name"];
        $u_email = $_POST["u_email"];
        $u_password = $_POST["u_password"];
        $u_phone_num = $_POST["u_phone_num"];

        $SQL = "INSERT INTO registeration (u_name, u_email, u_password, u_phone_num) VALUES ('$u_name', '$u_email', '$u_password', '$u_phone_num')";

        if(isset($u_name,$u_email,$u_password, $u_phone_num)){
            $result = mysqli_query($connection, $SQL);
            echo `<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Success!</strong>Your account has been created successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>`;

        }
        else{
            
        }

    }





?>


        <div class="container">

        <form class="form" action="signup.php" method="POST">
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="u_name">
            <span>Name</span>
        </label>

        <label>
            <input required="" placeholder="" type="email" class="input" name="u_email" required>
            <span>Email</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="password" class="input" name="u_password">
        <span>Password</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="number" class="input" name="u_phone_num">
        <span>Phone number</span>
    </label>
    <input type="submit" value="submit" name="submit" style="background-color: royalblue; color: white;">
    <p class="signin">Already have an acount ? <a href="login.php">Signin</a> </p>
</form>

        </div>
</body>
</html>