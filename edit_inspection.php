<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inspection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <script>
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
    </script>
  </head>
    <body>
<?php

include 'config.php';
$id = $_GET['id'];

 $select="SELECT * FROM inspection WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style= "color:blue;">Edit Inspection</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
    <label for="vehicle_reg_no">Vehicle Registration Number </label><br>
    <input type="text" name="vehicle_reg_no" placeholder="Enter Vehicle Registration Number..." 
    value="<?php echo $fetch['vehicle_reg_no'] ?>" required>
    <br>
    <label for="nickname">Vehicle's Nickname </label><br>
    <input type="text" name="nickname" placeholder="Enter vehicle's nickname..." 
    value="<?php echo $fetch['nickname'] ?>" required>
    <br>
    <label for="last_inspection">Date of Last Inspection </label><br>
    <input type="date" name="last_service" placeholder="Enter Date of Last Inspection..." 
    value="<?php echo $fetch['last_inspection'] ?>" required>
    <br>
    <label for="next_inspection">Date of Next Inspection </label><br>
    <input type="date" name="next_inspection" placeholder="Enter Date of Next Inspection..." 
    value="<?php echo $fetch['next_inspection'] ?>" required>
    <br>
    <label for="driver">Name of Driver </label><br>
    <input type="text" name="driver" placeholder="Enter full names of driver..." 
    value="<?php echo $fetch['driver'] ?>" required>
    <br>
    <label for="phone">Phone Number of Driver </label><br>
    <input type="text" name="phone" placeholder="Enter phone number of driver..." 
    value="<?php echo $fetch['phone'] ?>" required>
    <br>
    <label for="email">Email of Driver </label><br>
    <input type="email" name="email" placeholder="Enter email of driver..." 
    value="<?php echo $fetch['email'] ?>" required>
    <br>

    <input type="submit" name="update_btn" value="Update">
    <a href="view_maintenance.php" style="background-color: blue;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;";>Cancel</a>

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
        $vehicle_reg_no=$_POST['vehicle_reg_no'];
        $nickname=$_POST['nickname'];
        $last_inspection=$_POST['last_inspection'];
        $next_inspection=$_POST['next_inspection'];
        $driver=$_POST['driver'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];

        //$profit=$_REQUEST['profit'];

        $update="UPDATE inspection SET vehicle_reg_no='$vehicle_reg_no', nickname='$nickname', last_inspection='$last_inspection', next_inspection='$next_inspection',driver='$driver',phone='$phone',email='$email' WHERE id='$id'";
        $update_q=mysqli_query($con,$update);
        header('location:view_inspection.php');
        
    }
    ?>

</body>
    </html>
