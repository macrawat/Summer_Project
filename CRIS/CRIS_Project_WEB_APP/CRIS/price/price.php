<?php
session_start();
$date=date("d/m/Y");
$rates="";
$state=$_SESSION['state'];
if($state=="Delhi"){
	$state="NCT of Delhi";
}
//echo $state;

$con=mysqli_connect("localhost","Mavericks","barfi","mavericks");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//connect to data-base
//get prices from db
//column names
echo "State"."\t"."District"."\t"."Market"."\t"."Commodity"."\t"."Variety"."\t"."Arrival_Date"."\t"."Min_x0020_Price"."\t"."Max_x0020_Price"."\t"."Modal_x0020_Price"."<br />";
$que=mysqli_query($con,"SELECT * FROM daily_price WHERE Arrival_Date='$date' AND State='$state' ");
while($row=mysqli_fetch_array($que)){
//print column values 
echo $row[0]."".$row[1]."".$row[2]."".$row[3]."".$row[4]."".$row[5]."".$row[6]."".$row[7]."".$row[8];
//store prices
$rates.=$row[0]."".$row[1]."".$row[2]."".$row[3]."".$row[4]."".$row[5]."".$row[6]."".$row[7]."".$row[8];
}
mysqli_close($con);

?>
