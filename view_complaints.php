<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complaints</title>
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
  <a href="view_issues.php">Accidents</a>
  <a href="view_traffic_irregularity.php">Traffic Irregularities </a>
  <a href="view_complaints.php">Customer Complaints</a>
</div>

<?php
include 'config.php';
$select="SELECT*FROM complaints";
$select_q=mysqli_query($con,$select);
$data=mysqli_num_rows($select_q);


?>

<div class="table">
<h2>View Customer Complaints </h2>
<p><a href="insert_complaints.php">Insert Complaints </a></p> 

<table>
    <tr>
        <th>Vehicle Reg. No.</th>
        <th>Vehicle Nickname</th>
        <th>Date of Complaint</th>
        <th>Driver Incharge</th>
        <th>Driver ID Number</th>
        <th>Complaint Description</th>
        <th>Action Taken</th>
        <th colspan="2">Actions </th>
    </tr> 
<?php

if($data){
    while ($row=mysqli_fetch_array($select_q)){

        ?>
        <tr>
            <td><?php echo $row['vehicle_reg_no'] ?></td>
            <td><?php echo $row['nickname'] ?></td>
            <td><?php echo $row['date_of_complaint'] ?></td>
            <td><?php echo $row['driver_incharge'] ?></td>
            <td><?php echo $row['id_number'] ?></td>
            <td><?php echo $row['complaint_description'] ?></td>
            <td><?php echo $row['action_taken'] ?></td>
            <td><a href="edit_complaints.php?id=<?php echo $row['id'] ?> " style="background-color: blue;color: white; padding: 5px 15px; text-align: center; text-decoration: none; border-radius: 5px;"; >Edit</td>
            <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete_complaints.php?id=<?php echo $row['id'] ?>" style="background-color: red;color: white; padding: 5px 15px; text-align: center; text-decoration: none; border-radius: 5px;"; >Delete</td>
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
