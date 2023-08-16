<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appraisal</title>
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
  <a href="view_discplinary.php">Discplinary</a>
  <a href="view_appraisal.php">Driver Appraisal</a>
  <a href="appraisal_report.php"> Driver Report Card </a>
  <a href="view_driver_message.php"> Driver Messages </a>


</div>

<?php
include 'config.php';
$select="SELECT*FROM appraisal";
$select_q=mysqli_query($con,$select);
$data=mysqli_num_rows($select_q);
?>

<div class="table">
<h2>View Appraisal of Drivers</h2>
<p><a href="insert_appraisal.php">Insert Appraisal Details</a></p> 


<table>
    <tr>
        <th> Names</th>
        <th>ID Number</th>
        <th>Passport Photo</th>
        <th>Phone</th>
        <th>Integrity</th>
        <th>Discpline</th>
        <th>Punctuality</th>
        <th> Accident-free</th>
        <th>Decency</th>
        <th>Average Points</th>
        <th>Remarks</th>

        <th colspan="2"> Actions</th>

    </tr>

<?php
if($data){
    while ($row=mysqli_fetch_array($select_q)){
        ?>
        <tr>
            <td><?php echo $row['names'] ?></td>
            <td><?php echo $row['id_number'] ?></td>
            <td><img src="images/<?php echo $row['passport_photo'] ?>" width="80px"></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['integrity'] ?></td>
            <td><?php echo $row['discpline'] ?></td>
            <td><?php echo $row['punctuality'] ?></td>
            <td><?php echo $row['accident_free'] ?></td>
            <td><?php echo $row['decent'] ?></td>
            <td style= "font-weight:bold; color:blue;"><?php echo $row['points'] ?></td>
            <td><?php echo $row['remarks'] ?></td>


            <td><a href="edit_appraisal.php?id=<?php echo $row['id'] ?> " style="background-color: blue;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;"; >Edit</td>
            <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete_appraisal.php?id=<?php echo $row['id'] ?>" style="background-color: red;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;"; >Delete</td>
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
