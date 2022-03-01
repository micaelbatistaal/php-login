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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">




</body>
</html>