<?php
session_start();
$date="22/07/2013";//date("d/m/Y");
$rates="";
$glue=" ";
//$state=$_SESSION['state'];
//if($state=="Delhi"){
//	$state="NCT of Delhi";
//}
//echo $state;

$con=mysqli_connect("localhost","Mavericks","barfi","mavericks");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }

$que=mysqli_query($con,"SELECT * FROM daily_price WHERE Arrival_Date='$date'");
while($row=mysqli_fetch_array($que)){

//store prices
$rates.="District : ".$row[1]." "."Market : ".$row[2]." "."Commodity : ".$row[3]." "."Variety : ".$row[4]." "."Arrival_Date : ".$row[5]." "."Min_x0020_Price : ".$row[6]." "."Max_x0020_Price : ".$row[7]." "."Modal_x0020_Price : ".$row[8]." ";
}

echo $rates; 
mysqli_close($con);


?>
