<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  <script>
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
    </script>
  <body>
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
  <a href="#.php"> </a>
  <a href="#.php"> </a>
  <a href="#.php"></a>
  <a href="#.php"></a>
</div>
        <center>
  <br>
   <h2 style="color:blue; text-align:center; margin-top: 70px;"> Upload Files</h2>
      <div class="form">
        <form action="upload_form.php" method="post" enctype="multipart/form-data" >
          <input type="file" name="myfile"> <br>
         <!-- <button type="submit" name="save">upload</button>--->
          <input type="submit" name="save" value="Upload">
          <input type="reset">
        </form>
      </div>
      </center>
  </body>
</html>