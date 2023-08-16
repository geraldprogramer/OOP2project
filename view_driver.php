
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drivers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

    
    <SCRIPT type="text/javascript">
   window.history.forward();
   function noBack() { window.history.forward(); }
</SCRIPT>

    </head >
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
  <a href="view_fuel.php"> FUEL MANAGEMENT</a>
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
  <a href="view_discplinary.php">Discplinary</a>
  <a href="view_appraisal.php">Driver Appraisal</a>
  <a href="appraisal_report.php"> Driver Report Card </a>
  <a href="view_driver_message.php"> Driver Messages </a>
</div>

<?php
include 'config.php';
$select="SELECT*FROM drivers";
$select_q=mysqli_query($con,$select);
$data=mysqli_num_rows($select_q);
?>

<div class="table">
<h2>List of Drivers</h2>
<p><a href="insert_driver.php">Register New Driver</a></p> 


<table>
    <tr>
        <th> Names</th>
        <th>ID Number</th>
        <th>License Number</th>
        <th>Email</th>
        <th>Phone 1</th>
        <th>Phone 2</th>
        <th>Address</th>
        <th>Vehicle Assigned</th>
        <th> Route</th>
        <th>Passport Photo</th>

        <th colspan="2"> Actions</th>

    </tr>

<?php



if($data){
    while ($row=mysqli_fetch_array($select_q)){
        ?>
        <tr>
            <td><?php echo $row['names'] ?></td>
            <td><?php echo $row['id_number'] ?></td>
            <td><?php echo $row['license_number'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['phone2'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['vehicle_assigned'] ?></td>
            <td><?php echo $row['route'] ?></td>
            <td><img src="images/<?php echo $row['passport_photo'] ?>" width="80px"></td>
            <td><a href="edit_driver.php?id=<?php echo $row['id'] ?> " style="background-color: blue;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;"; >Edit</td>
            <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete_driver.php?id=<?php echo $row['id'] ?>" style="background-color: red;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;"; >Delete</td>
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
</table>

</div>
</body>
    </html>
