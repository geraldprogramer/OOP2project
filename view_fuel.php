<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  </head>
  <body onload="noBack();" 
   onpageshow="if (event.persisted) noBack();" onunload="">
   <!--NAVIGATION BAR-->
<div class="header">
<a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
</div>
<div class="topnav" id="myTopnav">
  <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
  <a href="dashboard_admin.php"> DASHBOARD</a>
 <a href="view_driver.php">DRIVER MANAGEMENT</a>
  <a href="view_vehicle.php">VEHICLE MANAGEMENT</a>
  <a href="view_maintenance.php">FUEL MANAGEMENT</a>
  <a href="view_revenue.php">REVENUE MANAGEMENT</a>
  <a href="view_issues.php">ISSUES</a>
  <a href="upload_form.php">UPLOADS</a>
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
  <a href="#.html"></a>
  <a href="#.php"> </a>
  <a href="#.php"></a>
  <a href="#.php"></a>
</div>

<?php
include 'config.php';
$select="SELECT*FROM fuel";
$select_q=mysqli_query($con,$select);
$data=mysqli_num_rows($select_q);


?>

<div class="table">
<h2>View Fuel Consumption</h2>
<p><a href="insert_fuel.php">Insert Fuel Consumption </a></p> 

<table>
    <tr>
        <th> Date</th>
        <th>Vehicle Registration Number</th>
        <th>Nickname</th>
        <th>Fuel per Day(Litres)</th>
        <th>Amount per Day(Kshs.)</th>
        <th colspan="2">Actions </th>
    </tr> 

<?php

if($data){
    while ($row=mysqli_fetch_array($select_q)){

        ?>
        <tr>
            <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['vehicle_reg_no'] ?></td>
            <td><?php echo $row['nickname'] ?></td>
            <td><?php echo $row['fuel'] ?></td>
            <td><?php echo $row['amount'] ?></td>
            <td><a href="edit_fuel.php?id=<?php echo $row['id'] ?> " style="background-color: blue;color: white; padding: 5px 15px; text-align: center; text-decoration: none; border-radius: 5px;"; >Edit</td>
            <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete_fuel.php?id=<?php echo $row['id'] ?>" style="background-color: red;color: white; padding: 5px 15px; text-align: center; text-decoration: none; border-radius: 5px;"; >Delete</td>
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
