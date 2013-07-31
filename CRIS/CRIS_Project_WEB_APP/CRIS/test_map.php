<?php
$i=$j=$k=$ar=$prod=0;
$con=mysqli_connect("localhost","Mavericks","barfi","mavericks");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  	$query1= mysqli_query($con,"SELECT DISTINCT CROP FROM `crop`");
	while($res=mysqli_fetch_array($query1))
	{

	$enter_crop=$res['CROP'];
	$crop[$i]=$enter_crop;
	$i++;

	}
	
	$query3= mysqli_query($con,"SELECT DISTINCT YEAR FROM `season`");
	while($res=mysqli_fetch_array($query3))
	{

	$enter_year=$res['YEAR'];
	$year[$k]=$enter_year;
	$k++;

	}

$c_crop=count($crop);
//echo "<br />";
//echo $c_state=count($state);
//echo "<br />";
$c_year=count($year);
//echo "<br />";

  for($i=0;$i<$c_crop;$i++)

{
$try="";

$trop=$crop[$i];//$_GET['crop'];
$file= "crop_map/$trop.csv";

	for($j=0;$j<$c_year;$j++)
	{
		$tear=$year[$j];
 //$entry="Production per unit Area,1998-1999,1999-2000,2000-2001,2001-2002,2002-2003,2003-2004,2004-2005,2005-2006,2006-2007,2007-2008,2008-2009,2009-2010,2010-2011"."\n";
 //file_put_contents($file, $entry);

// $querty=;
 $result=mysqli_query($con,"SELECT YEAR,STATE,PA FROM map_data WHERE CROP='$trop' AND YEAR='$tear'");
 while($row=mysqli_fetch_assoc($result))
 {	
 	
 	$try .= $row['STATE'].",".$row['YEAR'].",".$row['PA']."\n";
 	//var_dump($row);

 }

 $try.="\n";
 file_put_contents($file, $try, FILE_APPEND);

var_dump($row);

}
}
?>