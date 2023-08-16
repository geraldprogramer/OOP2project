
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drivers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

    </head >
    <body>
      <?php
      $date = date('2023-06-10');
      $time = date('22:20:00');
      

      $date_today = $date . ' ' . $time;
      ?>

      <script type="text/javascript">
          //set the date we are counting down to
          var count_id = "<?php echo $date_today; ?>";
          var countDownDate = new Date(count_id).getTime();
          //update the count down every 1 second 
          var x = setInterval(function(){
            //Get today's date and time
            var now = new Date().getTime();
            //Find the distance between now and the count down date
            var distance =countDownDate - now;
            //Time calculations for day, hours, minutes and seconds
            var days = Math.floor(distance/(1000*60*60*24));
            var hours = Math.round(distance % (1000*60*60*24))/(1000*60*60 );
            //var minutes = Math.floor(distance%(1000*60*60))/(1000*60); 
            //var seconds = Math.floor(distance%(1000*60))/1000;

          //output the results in an element with id="demo"
          document.getElementById("demo").innerHTML =  days + "days" + hours + "h";

          //document.getElementById("demo").innerHTML =  days + "d" + hours + "h" + minutes + "m" + seconds + "s";
          //If the count down is over, write some text
          if(distance<0){
            clearInterval(x);
            document.getElementById("demo").innerHTML="EXPIRED";
          }
          },1000);
        </script>
<table>
  <tr>
    <th>Last Inspection Date</th>
    <th>Next Inspection Date</th>
    <th>Remaining Days</th>
  </tr>
  <tr>
    <td>2023-05-10</td>
    <td>2023-07-10</td>
    <td><?php echo '<p id="demo" style="font-size:15px;"></p>';?>
</td>
  </tr>
</table>



    </body> 
    </html>
