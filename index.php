<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <style>
        .container-form{
            background-color: #e9e9e973;
            width: 336px;
            border-radius: 5px;
            height: 340px;
            margin: 0px auto;
            margin-top: 40px;
        }
        .container-form img{
            width: 180px;
            margin: 0px auto;
            display: block;
        }
        form input{
            width: 250px;
            display: block;
            margin:0px auto;
            height: 40px;
            margin-top: 5px;
            border: 1px solid #e3e3e3;
        }
        form small{
            margin: 0px auto;
            display: block;
            text-align: center;
        }
         button{
            width: 100px;
            margin: 0px auto;
            display: block!important;
            text-align: center;
            background-color: #2371b8!important;
        }
    </style>


<div class="container-fluid">
    <div class="container">

        <div class="container-form">
            <img src="img/php8.png" alt="">
            <form action="" method="post">

                <small for="">E-mail</small>
                <input type="email" name="" id="">

                <small style="margin-top: 20px;" for="">Password</small>
                <input type="password" name="" id="">
                <button style="margin-top: 20px;" class="btn btn-primary" type="submit" value="Entrar">Entrar</button>
            </form>
        </div>

    </div>
</div>


    
</body>
</html>