<?php
@include 'config.php';

/*session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}*/
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <title> Print Report </title>
        <!--- custom cs file link---->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        
<style>
    *{ 
        margin: 0px;

     }
    table { 
        width: 70%;
        text-align: center;

     }
    table tr td{ 
        border: solid black 1px;

     }
</style>

    </head >
    <body>
   <div class="header">
    <a href="home_driver.php"><img src="/images/supremeshuttlelogo.png"></a>
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

<br>
<center>
<div class="form">
<form action="print_report.php" method="GET">
<a href="appraisal_report.php" ><span>Back</span></a>
<label> ID Number</label>
<input type="text" style="width: 20%;" name= "id_number" value= "<?php if (isset($_GET['id_number'])){echo $_GET['id_number'];}?>"></input>
<!--<button type = "submit">Search</button>-->
<input type="submit" name="insert_btn" value="Search">
<!--<a href="print_report.php" class="btn btn-printing btn-lg" onClick="print()"><span>Print Report</span></a>-->
<button onClick="window.print()">Print Report</button>

</form> 
</div>

 
        <table>       

            <?php
            include 'config.php';
        if(isset($_GET['id_number']))
        {
            $id_number = $_GET['id_number'];
           /* $query = "SELECT appraisal.integrity, appraisal.discpline, appraisal.punctuality, appraisal.accident_free, appraisal.decent, appraisal.points,appraisal.remarks, drivers.names,
                    drivers.id_number, drivers.phone, drivers.email, drivers.address,drivers.vehicle_assigned,drivers.passport_photo,
                    vehicles.registration_number, vehicles.nickname

                    FROM appraisal
                    LEFT JOIN  drivers
                    ON drivers.id_number = appraisal.id_number
                    LEFT JOIN  vehicles
                    ON drivers.id_number = vehicles.id_number
                    ";*/
                    //$query = "SELECT * FROM drivers   WHERE id_number='$id_number'";    

                    $query = "SELECT appraisal.integrity, appraisal.discpline, appraisal.punctuality, appraisal.accident_free, appraisal.decent, appraisal.points,appraisal.remarks, drivers.names,
                    drivers.id_number, drivers.license_number,  drivers.phone, drivers.phone2, drivers.email, drivers.address,drivers.vehicle_assigned,drivers.passport_photo,
                    vehicles.registration_number, vehicles.nickname
                    FROM drivers, vehicles, appraisal
                    WHERE drivers.id_number = '$id_number'
                    AND appraisal.id_number ='$id_number'
                    AND vehicles.id_number = '$id_number'
                    ";

            $query_run = mysqli_query($con,$query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $row)
                {
                    //echo $row ['id_number'];
                    ?>
            <tr>
                <td colspan="5"> SUPREME SHUTTLE LIMITED</td>
                <td rowspan="4"><img src="images/<?php echo $row['passport_photo'] ?>" width="80px"></td>
            </tr>
            <tr>
            <td colspan="5"> P.O. BOX 3333, THIKA</td>
            </tr>
            <tr>
            <td colspan="5"> PHONE. 07337363663</td>
            </tr>
            <tr>
            <td colspan="5">EMAIL: supremeshuttle@gmail.com</td>

            </tr>

            <tr>
                <td colspan="6"> ______________________________________________________</td>
            </tr>
            <tr>
                <td colspan="6" ><b> DRIVER DETAILS</b></td>
            </tr>
            <tr>
                <td >Name:</td>
                <td colspan="3"><?php echo $row['names'] ?> </td>
                <td >ID No.:</td>
                <td > <?php echo $row['id_number'] ?></td>
            </tr>
            <tr>
                <td >Phone No. 1:</td>
                <td > <?php echo $row['phone'] ?></td>
                <td >Phone No. 2: </td>
                <td ><?php echo $row['phone2'] ?></td>
                <td >License No.: </td>
                <td ><?php echo $row['license_number'] ?> </td>
            </tr>
            <tr>
                <td >E-mail: </td>
                <td colspan="2"> <?php echo $row['email'] ?></td>
                <td>Address: </td>
                <td colspan="2"> <?php echo $row['address'] ?></td>
            </tr>
            <tr>
                <td colspan="6" ><b>VEHICLE ALLOCATED</b></td>
            </tr>
            <tr>
            <tr>
                <td > Vehicle Reg. No.:</td>
                <td colspan="2"><?php echo $row['vehicle_assigned'] ?></td>
                <td >Nickname: </td>
                <td colspan="2"> <?php echo $row['nickname'] ?>  </td>
            </tr>
            <tr>
                <td > Criteria:</td>
                <td > Points:</td>
                <td >Criteria: </td>
                <td >Points: </td>
                <td > </td>
                <td > </td>
            </tr>
            <tr>
                <td >Integrity: </td>
                <td ><?php echo $row['integrity'] ?> </td>
                <td >Accident-free: </td>
                <td ><?php echo $row['accident_free'] ?>  </td>
                <td > Average Points:</td>
                <td > <?php echo $row['points'] ?></td>
            </tr>
            <tr>
                <td > Discipline:</td>
                <td > <?php echo $row['discpline'] ?> </td>
                <td >Decency: </td>
                <td > <?php echo $row['decent'] ?> </td>
                <td > </td>
                <td > </td>
            </tr>
            <tr>
                <td > Punctuality:</td>
                <td > <?php echo $row['punctuality'] ?> </td>
                <td > </td>
                <td >Remarks: </td>
                <td colspan="2"><?php echo $row['remarks'] ?> </td>
            </tr>
            <tr>
                <td colspan="6"> ______________________________________________________</td>
            </tr>
            <tr>
                <td > </td>
                <td > Chairman</td>
                <td colspan="2"> </td>
                <td >Managing Director </td>
                <td > </td>
            </tr>
            <tr>
                <td > </td>
                <td > Sign</td>
                <td colspan="2"> </td>
                <td > Sign </td>
                <td > </td>
            </tr>
            <tr>
                <td > </td>
                <td > Mr. Jackson Ole Ntutu</td>
                <td colspan="2"> </td>
                <td >Mr. keneth Matiya Gerany  </td>
                <td > </td>
            </tr>

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
}
?>

      </table>
      <br>
      <p><i>********** This is a Computer Generated Report **********</i></p>
</center>
<br><br>

<!--
<div class="container">
    <button type="" class="btn btn-info no print" style="width:40%" onclick="window.location.replace('appraisal_report.php');">CANCEL PRINTING</button>
</div> -->
    </body>
</html>

