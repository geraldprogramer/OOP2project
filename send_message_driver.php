<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  <script>
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
    </script>
  </head>
    <body>
    <div class="header">
    <a href="home_driver.php"><img src="/images/supremeshuttlelogo.png"></a>
    </div>
        <div class="topnav" id="myTopnav">
    <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
    <a href="home_driver.php"> HOME</a>
     <a href="appraisal_report_driver.php">APPRAISAL REPORT</a>
      <a href="downloads_driver.php"> DOWNLOADS</a>
      <a href="send_message_driver.php"> SEND MESSAGE</a>
      <a href="index.php">LOGOUT</a>
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
  <a href="#.php"></a>
  <a href="#.php"> </a>
  <a href="#.php"></a>
</div>
   
        <center>
  <br>
    <center>
<h2 style="color:blue";>Send Message </h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="names">Full Names  </label><br>
  <input type="text" name="names" placeholder="Enter Full Names..." required>
  <br>
  <label for="email"> Email </label><br>
  <input type="email" name="email" placeholder="Enter Email..." >
  <br>
  <label for="phone">Phone Number  </label><br>
  <input type="number" name="phone"  placeholder="Enter Phone Number..." required>
  <br>
  <label for="address">Address </label><br>
  <input type="text" name="address" placeholder="Enter address ..." required>
  <br>
  <label for="message">Message:</label> <br>
    <textarea name="message" rows="5" cols="80">
      </textarea>
      <br>
  <input type="submit" name="insert_btn" value="Send">
  <input type="reset">

</form>
</div>

</center>


<?php
include 'config.php';


if(isset($_POST['insert_btn'])){
    $names=$_POST['names'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $message=$_POST['message'];
    
  $insert="INSERT INTO driver_messages (names, email, phone, address, message)
  VALUES('$names', '$email', '$phone','$address','$message')";
  $insert_q=mysqli_query($con,$insert);
  if($insert_q){
      ?>
      <script type="text/javascript">
          alert("Message Sent successfully");
      </script>
      <?php
  } 
  else
  {
      ?>
      <script type="text/javascript">
          alert("Sorry! Message Not Sent. Please Try Again!");
      </script>
      <?php
  }

}


?>
   </body>
    </html>