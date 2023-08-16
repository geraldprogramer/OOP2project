<?php
$exp_date = "2023/06/30";
$today_date = date('Y-m-d'); 

//convert to strtotime
$exp = strtotime($exp_date);
$td = strtotime($today_date);
 //now compare using if logic
 if($td > $exp)
 {
    //calculate days left
    $diff = $td-$exp;
    $x=abs(floor($diff / (60 * 60 * 24)));
    echo "Expired";
   // echo "<br/> Days Left:".$x;
 }
 else
{
    $diff = $td-$exp;
    $x=abs(floor($diff / (60 * 60 * 24)));
    echo "Active";
    echo "<br/> Days Left:".$x;

}

//$t=time(); 
//echo(date("Y-m-d",$t));


?>