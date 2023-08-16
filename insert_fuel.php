<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  <script>
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
    </script>
  </head>
    <body>
    <center>

<h2 style="color:blue";> Insert Fuel</h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="date">Date </label><br>
  <input type="date" name="date" placeholder="Enter date..." required>
  <br>
  <label for="vehicle_reg_no">Vehicle Registration Number </label><br>
  <input type="text" name="vehicle_reg_no" placeholder="Enter Vehicle Registration Number..." required>
  <br>
  <label for="nickname">Nickname </label><br>
  <input type="text" name="nickname" placeholder="Enter nickname..." required>
  <br>
  <label for="fuel">Fuel (Litres) </label><br>
  <input type="text" name="fuel" placeholder="Enter fuel consumed per day..." required>
  <br>
  <label for="amount">Amount </label><br>
  <input type="text" name="amount" placeholder="Enter amount spent per day..." required>
<br>
  
  <input type="submit" name="insert_btn" value="Insert">
  <input type="reset">
  <p><a href="view_fuel.php">View Fuel Consumed</a></p>

  
</form>
</div>

</center>

<?php
include 'config.php';

if(isset($_POST['insert_btn'])){
    $date=$_POST['date'];
    $vehicle_reg_no=$_POST['vehicle_reg_no'];
    $nickname=$_POST['nickname'];
    $fuel=$_POST['fuel'];
    $amount=$_POST['amount'];
   
$insert="INSERT INTO fuel (date, vehicle_reg_no,nickname,fuel,amount)
  VALUES('$date', '$vehicle_reg_no', '$nickname','$fuel','$amount')"; 

  
  $insert_q=mysqli_query($con,$insert);
  if($insert_q){
      ?>
      <script type="text/javascript">
          alert("Data saved successfully");
      </script>
      <?php
  } 
  else
  {
      ?>
      <script type="text/javascript">
          alert("Please try again.");
      </script>
      <?php
  }

}

   






?>
   </body>
    </html>