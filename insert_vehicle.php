<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vehicles</title>
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

<h2 style="color:blue";>Register Vehicle</h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="registration_number">Registration Number </label><br>
  <input type="text" name="registration_number" placeholder="Enter Registration Number..." required>
  <br>
  <label for="engine_number">Engine Number </label><br>
  <input type="text" name="engine_number" placeholder="Enter Engine Number..." >
  <br>
  <label for="make">Make </label><br>
  <input type="text" name="make" placeholder="Enter  make of vehicle..." required>
  <br>
  <label for="model">Model </label><br>
  <input type="text" name="model" placeholder="Enter model of vehicle..." required>
  <br>
  <label for="colour">Colour </label><br>
  <input type="text" name="colour" placeholder="Enter colour of vehicle..." required>
  <br>
  <label for="year_of_manufacture"> Year of Manufacture </label><br>
  <input type="text" name="year_of_manufacture"  placeholder="Enter vehicle's Year of Manufacture..."required>
  <br>
  <label for="nickname"> Nickname </label><br>
  <input type="text" name="nickname"  placeholder="Enter nickname of vehicle..."required>
  <br><br>
  <label for="vehicle_photo">Vehicle Photo </label>
  <input type="file" name="vehicle_photo"  required>
  <br><br>
  <label for="names"> Driver In Charge </label><br>
  <input type="text" name="names"  placeholder="Enter name of driver incharge..."required>
  <br>
  <label for="id_number"> Driver ID Number </label><br>
  <input type="number" name="id_number"  placeholder="Enter ID number of driver..."required>
  <br><br>
  <input type="submit" name="insert_btn" value="Insert">
  <input type="reset">
  <p><a href="view_vehicle.php">View All Vehicles</a></p>

  
</form>
</div>

</center>


<?php
include 'config.php';
if(isset($_POST['insert_btn'])){
    $registration_number=$_POST['registration_number'];
    $engine_number=$_POST['engine_number'];
    $make=$_POST['make'];
    $model=$_POST['model'];
    $colour=$_POST['colour'];
    $year_of_manufacture=$_POST['year_of_manufacture'];
    $nickname=$_POST['nickname'];
    $image=$_FILES['vehicle_photo']['name'];
    $tmp_name=$_FILES['vehicle_photo']['tmp_name'];
    $destination="images/".$image;
    move_uploaded_file($tmp_name, $destination);
    $names=$_POST['names'];
    $id_number=$_POST['id_number'];
   /*$id = "SELECT * FROM drivers WHERE id_number = '$id_number'";
    $result = mysqli_query($con, $id);
    $count = mysqli_num_rows($result);
    if ($count>0){
       echo "Duplicate!!";
    }*/
  $insert="INSERT INTO vehicles (registration_number, engine_number, make, model, colour, year_of_manufacture, nickname, vehicle_photo,names,id_number)
  VALUES('$registration_number', '$engine_number', '$make','$model','$colour','$year_of_manufacture','$nickname','$image','$names','$id_number')";
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
          alert("Please try again. Note Registration Number, Engine Number and Nickname must be unique");
      </script>
      <?php
  }

}

?>
   </body>
    </html>