<?php
session_start();
    $hostname = "database";
    $username = "root";
    $password = $_ENV['MYSQL_ROOT_PASSWORD'];
    $database = "login-php";
    $link = mysqli_connect("$hostname","$username","$password","$database");
    
    @$email_POST     = $_POST['email'];
    @$password_POST  = md5($_POST['password']);

    $select = "SELECT email, password FROM admin WHERE email = '$email_POST' AND password = '$password_POST'";
    $query  = mysqli_query($link, $select);
    $rows = mysqli_num_rows($query);
    if($rows > 0){
       header("Location: success.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/img/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP</title>
</head>
<body>



<div class="container-fluid">
    <div class="container">

        <div class="container-form">
            <img src="img/php8.png" alt="">
            <form action="" method="post">
                <small for="">E-mail</small>
                <input type="email" name="email" id="">
                <small for="">Password</small>
                <input type="password" name="password" id="">
                <button class="btn btn-primary" type="submit" value="Entrar">Entrar</button>
            </form>
        </div>

    </div>
</div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
</body>
</html>