<?php
@include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <title> Home Page </title>
        <!--- custom cs file link---->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
 
</style>
    </head>
    <body>
    <div class="header">
    <a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
    </div>
        <div class="topnav" id="myTopnav">
    <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
    <a href="home_client.php"> HOME</a>
     <a href="vehicle_packages.php">HIRE VEHICLE</a>
      <a href="#.php">REPORTS</a>
      <a href="#.php"> DOWNLOADS</a>
      <a href="#.php"> SEND COMPLAINTS</a>
      <a href="logout.php">LOGOUT</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
     
<div class="secnav">
  <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
  <a href="#.php">xxx</a>
  <a href="#.php">xxx </a>
  <a href="#.php">xxx</a>
</div>
    <h2 style="color:blue; text-align:center;" >Welcome to Supreme Shuttle Management System</h2>
    <div class="banner">
        <div>
        <center>
  <br>
   <h3 style="color:red; text-align:center; margin-top: 160px;"> Notices</h3>

 
    </center>

    </body>
    </html>

