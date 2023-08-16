<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drivers</title>
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
  <a href="home_driver.php"> HOME</a>
     <a href="user_driver.php">VEHICLE ASSIGNED</a>
     <a href="appraisal_report_driver.php">APPRAISAL REPORT</a>
      <a href="downloads_driver.php"> DOWNLOADS</a>
      <a href="send_message_driver.php"> SEND MESSAGE</a>
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
    
<?php
include 'config.php';
$select="SELECT*FROM vehicles";
$select_q=mysqli_query($con,$select);
$data=mysqli_num_rows($select_q);
?>

<div class="table">
<h2>Vehicle Assigned</h2>

<center> 
<table>
    <tr>
        <th> Driver Name</th>
        <th> Registration Number</th>
        <th>Make</th>
        <th>Model</th>
        <th>Colour</th>
        <th> Nickname</th>
        <th>Vehicle Photo</th>
    </tr>

<?php
if($data){
    while ($row=mysqli_fetch_array($select_q)){
        ?>
        <tr>
            <td><?php echo $row['names'] ?></td>
            <td><?php echo $row['registration_number'] ?></td>
            <td><?php echo $row['make'] ?></td>
            <td><?php echo $row['model'] ?></td>
            <td><?php echo $row['colour'] ?></td>
            <td><?php echo $row['nickname'] ?></td>
            <td><img src="images/<?php echo $row['vehicle_photo'] ?>" width="80px"></td>
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
</center>
</div>

</body>
    </html>
