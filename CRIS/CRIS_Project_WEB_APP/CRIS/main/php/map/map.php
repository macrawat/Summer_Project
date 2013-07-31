<?php

$file="export.tsv";
//define variables
//$p_state="";
//$p_city="";
$season ="";
//$pins=$_GET['pincode'];
//$state="Haryana";//$_GET['state'];
$state=$_GET['state'];
//$city=$_GET['city'];
//$district=$_GET['district'];
//$year="2005";//$_GET['year'];
$year=$_GET['year'];
//$crop="jowar";//$_GET['crop'];
$crop=$_GET['crop'];
$today=date("M");
//variables defined
echo $state;
//check for season
require 'season.php';
//checked

//connect to database
$con=mysqli_connect("localhost","Mavericks","barfi","mavericks");
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
//connection made

//check variables
if(($state=="")&&($crop=="")&&($year==""))
{
	echo "Please enter a choice";
	exit();
}

elseif(($state=="")&&($crop=="")&&($year!=""))
{
	//display production , landuse & prices data for the selected year for all the crops and all the states 
	$query= "SELECT * FROM season WHERE YEAR='$year'";
}
elseif(($state=="")&&($crop!="")&&($year==""))
{
	//display production data for a particular crop every year in every state
	$query= "SELECT * FROM season WHERE CROP='$crop'";
}
elseif(($state=="")&&($crop!="")&&($year!=""))
{
	//display production and land use data for a particular crop in a particular year across the country
	$query= "SELECT * FROM season WHERE YEAR='$year' AND CROP='$crop'";
}
elseif(($state!="")&&($crop=="")&&($year==""))
{
	//display production stats of every crop in a state for all the years
	$query= "SELECT * FROM season WHERE STATE='$state'";
}
elseif(($state!="")&&($crop=="")&&($year!=""))
{
	//display production stats of all crops in a particular state in a particular year
	$query= "SELECT * FROM season WHERE STATE='$state' AND YEAR='$year'";
}
elseif(($state!="")&&($crop!="")&&($year==""))
{
	//display production stats of a crop in a particular state in for every year
	$query= "SELECT * FROM season WHERE STATE='$state' AND CROP='$crop'";
}
elseif(($state!="")&&($crop!="")&&($year!=""))
{
	//display production stats of a crop in a particular state in a particular year
	$query= "SELECT * FROM season WHERE STATE='$state' AND YEAR='$year' AND CROP='$crop'";
}


$res = mysqli_query($con, $query);
echo "year"."\t"."state"."\t"."district"."\t"."crop"."\t"."season"."\t"."area"."\t"."production"."\n";
while($rowcrop = mysqli_fetch_array($res))
{
$test=$rowcrop[0]."\t".$rowcrop[1].$rowcrop[2]."\t".$rowcrop[3]."\t".$rowcrop[4]."\t".$rowcrop[5]."\t".$rowcrop[6]."\n";
$fest.=$test;
//print_r($test);
}
file_put_contents($file, $fest);
//header('location: index_original.html');
//$rowcrop = mysqli_fetch_array($res);
//print_r($rowcrop);
?>
