<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maintenance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  </head>
    <body>
<!--NAVIGATION BAR-->
<div class="header">
<a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
</div>
<div class="topnav" id="myTopnav">
  <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
  <a href="dashboard_admin.php"> DASHBOARD</a>
 <a href="view_driver.php">DRIVER MANAGEMENT</a>
  <a href="view_vehicle.php">VEHICLE MANAGEMENT</a>
  <a href="view_fuel.php"> FUEL MANAGEMENT</a>
  <a href="view_revenue.php">REVENUE MANAGEMENT</a>
  <a href="view_issues.php">ISSUES</a>
  <a href="logout-user.php">LOGOUT</a>
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
  <a href="view_service.php">Service</a>
  <a href="view_insurance.php">Insurance</a>
  <a href="view_inspection.php">Inspection </a>
</div>

<?php
include 'config.php';
$select="SELECT*FROM maintenance";
$select_q=mysqli_query($con,$select);
$data=mysqli_num_rows($select_q);


?>

<div class="table">
<h2>View Service Details</h2>
<p><a href="insert_service.php">Insert Service Details </a></p> 

<table>
    <tr>
        <th>Vehicle Registration Number</th>
        <th>Nickname</th>
        <th>Date of Last Service</th>
        <th>Date of Next Service</th>
        <th >Status</th>
        <th>Days Remaining/Overdue </th>
        <th>Driver</th>
        <th>Phone</th>
        <th>Email</th>
        <th colspan="2">Actions </th>
    </tr> 
<?php

if($data){
    while ($row=mysqli_fetch_array($select_q)){

        ?>
        <tr>
            <td><?php echo $row['vehicle_reg_no'] ?></td>
            <td><?php echo $row['nickname'] ?></td>
            <td><?php echo $row['last_service'] ?></td>
            <td><?php echo $row['next_service'] ?></td>
            <td style="color:red; font-weight:600;"><?php echo $row['status'] ?></td> 
            <td><?php echo $row['remaining_days'] ?></td>    
            <td><?php echo $row['driver'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><a href="edit_service.php?id=<?php echo $row['id'] ?> " style="background-color: blue;color: white; padding: 5px 15px; text-align: center; text-decoration: none; border-radius: 5px;"; >Edit</td>
            <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete_service.php?id=<?php echo $row['id'] ?>" style="background-color: red;color: white; padding: 5px 15px; text-align: center; text-decoration: none; border-radius: 5px;"; >Delete</td>
  
        </tr>

        
        <?php
    }
}
else
{
    ?>
      <script type="text/javascript">
          alert("No record found!!!");
      </script>
      <?php
    //echo "No record found";
}
?>

<?php


?>
</table>

</div>
</body>
    </html>
