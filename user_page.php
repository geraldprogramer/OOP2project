<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <title> user page </title>
        <!--- custom cs file link---->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="content">
                <h3>Hi, <span>User</span></h3>
                <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
                <!--<p>this is an user page</p>-->
                <!--<a href="login_form.php" class="btn">login</a>-->
                <!--<a href="register_form.php" class="btn">register</a>-->
                <a href="logout.php" class="btn">logout</a>
                <a href="home_driver.php" class="btn">Click here to Proceed</a>


            </div>
        </div>

