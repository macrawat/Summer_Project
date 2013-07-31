<?php
$date="25/07/2013";//date("d/m/Y");
//connect to data-base

$con=mysqli_connect("localhost","root","","state_crop");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//connect to data-base
//get prices from db
echo "State"."         "."District"."         "."Market"."         "."Commodity"."         "."Variety"."         "."Arrival_Date"."         "."Min_x0020_Price"."         "."Max_x0020_Price"."         "."Modal_x0020_Price"."<br />";
$que=mysqli_query($con,"SELECT * FROM daily_price WHERE Arrival_Date='$date'");
while($row=mysqli_fetch_array($que)){
  echo $row[0]."         ".$row[1]."         ".$row[2]."         ".$row[3]."         ".$row[4]."         ".$row[5]."         ".$row[6]."         ".$row[7]."         ".$row[8]."<br />";
}
mysqli_close($con);

//$time= time();
//$entry= date('Y-m-d H:i:s');
//echo $entry."\n";

?>
