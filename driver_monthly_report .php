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
        <title> Admin Page </title>
        <!--- custom cs file link---->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <SCRIPT type="text/javascript">
   window.history.forward();
   function noBack() { window.history.forward(); }
</SCRIPT>
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
    <body onload="noBack();" 
   onpageshow="if (event.persisted) noBack();" onunload="">
   <div class="header">
    <a href="home_driver.php"><img src="/images/supremeshuttlelogo.png"></a>
    </div>
        <div class="topnav" id="myTopnav">
    <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
    <a href="home_driver.php"> HOME</a>
     <a href="user_driver.php">VEHICLE ASSIGNED</a>
     <a href="driver_monthly_report.php">APPRAISAL REPORT</a>
      <a href="downloads_driver.php"> DOWNLOADS</a>
      <a href="#.php"> SEND MESSAGE</a>
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
   <center> 
        <table>       
            <tr>
                <td colspan="5"> SUPREME SHUTTLE LIMITED</td>
                <td rowspan="4">passport</td>
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
                <td colspan="3"> </td>
                <td >ID No.:</td>
                <td > </td>
            </tr>
            <tr>
                <td >Phone No. 1:</td>
                <td > 0705608609</td>
                <td >Phone No. 2: </td>
                <td >0705608609 </td>
                <td >License No.: </td>
                <td >RF5672hh </td>
            </tr>
            <tr>
                <td >E-mail: </td>
                <td colspan="2"> </td>
                <td>Address: </td>
                <td colspan="2"> </td>
            </tr>
            <tr>
                <td colspan="6" ><b>VEHICLE ALLOCATED</b></td>
            </tr>
            <tr>
            <tr>
                <td > Vehicle Reg. No.:</td>
                <td colspan="2"> KCD 234H</td>
                <td >Nickname: </td>
                <td colspan="2"> Guardian Angel </td>
            </tr>
            <tr>
                <td > Criteria:</td>
                <td > Points:</td>
                <td >Criteria: </td>
                <td >Points: </td>
                <td > NULL</td>
                <td >NULL </td>
            </tr>
            <tr>
                <td >Integrity: </td>
                <td > </td>
                <td >Accident-free: </td>
                <td >NULL </td>
                <td > Average Points:</td>
                <td > NULL</td>
            </tr>
            <tr>
                <td > Discipline:</td>
                <td > </td>
                <td >Decency: </td>
                <td > NULL</td>
                <td > NULL</td>
                <td >NULL </td>
            </tr>
            <tr>
                <td > Punctuality:</td>
                <td > NULL</td>
                <td > NULL</td>
                <td >Remarks: </td>
                <td colspan="2"> </td>
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

            <?php
            include 'config.php';
         $select="SELECT*FROM drivers, vehicles, appraisal " ;
            $select_q=mysqli_query($con,$select);
            $data=mysqli_num_rows($select_q);
            
if($data){
    while ($row=mysqli_fetch_array($select_q)){
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
                <td >xxxxxxxx </td>
                <td >License No.: </td>
                <td >RF5672hh </td>
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
                <td > NULL</td>
                <td >NULL </td>
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
                <td > NULL</td>
                <td >NULL </td>
            </tr>
            <tr>
                <td > Punctuality:</td>
                <td > <?php echo $row['punctuality'] ?> </td>
                <td > NULL</td>
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
?>




        </table>

        </center>
<br>
      



    </body>
</html>

