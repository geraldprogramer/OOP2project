<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
     <a href="vehicle_packages.php">HIRE VEHICLE</a>
      <a href="view_vehicle.php">REPORTS</a>
      <a href="#.php"> DOWNLOADS</a>
      <a href="#.php"> SEND COMPLAINTS</a>
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
         
    <div class="secnav">
      <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
      <a href="#.php">xxx</a>
      <a href="#.php">xxx </a>
      <a href="#.php">xxx</a>

    </div>
<h2 style="color: blue; text-align: center;">Available Packages</h2>
<div class="rowcard">
  <div class="columncard">
    <div class="card">
      <h3>7 Seater (5,000/=)</h3>
      <img src="images/7_seater.jpg">
      <h3>Features & Inclusions</h3>
      <ul>
        <li>Unlimited mileage</li>
        <li>7-seater capacity </li>
        <li>Economical Fuel Consumption</li>
        <li>Small Luggage Capacity</li>
        <li>Air Conditioning</li>
        <li>Lifesaver & Fire extinguisher</li>
        <li>Air Conditioning</li>
        <li>Chauffeured Driver</li>
      </ul>
      <button><a href="vehicle_shopping_cart.php">Hire This Vehicle </a></button>
    </div>
  </div>

  <div class="columncard">
    <div class="card">
      <h3>14 Seater (7,500/=)</h3>
      <img src="images/14_seater.jpg">
      <h3>Features & Inclusions</h3>
      <ul>
        <li>Unlimited mileage</li>
        <li>14-seater capacity</li>
        <li>Economical Fuel Consumption</li>
        <li>Moderate Luggage Capacity</li>
        <li>Air Conditioning</li>
        <li>Lifesaver & Fire extinguisher</li>
        <li>Air Conditioning</li>
        <li>Chauffeured Driver</li>
      </ul>
      <button><a href="vehicle_shopping_cart.php">Hire This Vehicle </a></button>
    </div>
  </div>
  <div class="columncard">
    <div class="card">
      <h3>33 Seater (13,500/=)</h3>
      <img src="images/33_seater.jpg">
      <h3>Features & Inclusions</h3>
      <ul>
        <li>Unlimited mileage</li>
        <li>33-seater capacity</li>
        <li>Economical Fuel Consumption</li>
        <li>Big Luggage Capacity</li>
        <li>Air Conditioning</li>
        <li>Lifesaver & Fire extinguisher</li>
        <li>Air Conditioning</li>
        <li>Friendly and professional Driver</li>
      </ul>
      <button><a href="vehicle_shopping_cart.php">Hire This Vehicle </a></button>
    </div>
  </div>
  
 
</div>

</body>
</html>