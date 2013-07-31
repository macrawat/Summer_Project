<?php

$crop=$_GET['crop'];


$con=mysqli_connect("localhost","root","","state_crop");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 $query="SELECT YEAR,STATE,PA FROM map_data WHERE CROP='$crop' ";
 $result=mysqli_query($con,$query);
 while($row=mysqli_fetch_array())
 {
 	var_dump($row);
 }


?>