<?php
$i=$j=$k=$ar=$prod=0;

	$con=mysqli_connect("localhost","Mavericks","barfi","mavericks");
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}

	//$year= array(1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010);
	$query1= mysqli_query($con,"SELECT DISTINCT CROP FROM `season`");
	while($res=mysqli_fetch_array($query1))
	{

	$enter_crop=$res['CROP'];
	$crop[$i]=$enter_crop;
	$i++;

	}
	$query2= mysqli_query($con,"SELECT DISTINCT STATE FROM `season`");
	while($res=mysqli_fetch_array($query2))
	{

	$enter_state=$res['STATE'];
	$state[$j]=$enter_state;
	$j++;

	}
	$query3= mysqli_query($con,"SELECT DISTINCT YEAR FROM `season`");
	while($res=mysqli_fetch_array($query3))
	{

	$enter_year=$res['YEAR'];
	$year[$k]=$enter_year;
	$k++;

	}

echo $c_crop=count($crop);
echo "<br />";
echo $c_state=count($state);
echo "<br />";
echo $c_year=count($year);
echo "<br />";


$query=mysqli_query($con,"SELECT * FROM `season`");
					while($row=mysqli_fetch_array($query))
					{

							$PA=$row['PRODUCTION']/$row['AREA'];
							


							
					}

	for($k=0; $k<$c_year; $k++)
	{
		//echo "year = ".$year[$k]."<br />";
		for($j=0; $j<$c_state; $j++)
		{
			//echo "state = ".$state[$j]."<br />";
			for($i=0; $i<$c_crop; $i++)
			{

					
			}
		}
	}


	



/*
$try=24000;
$ryt=81;
echo round($test=$try/$ryt,3);
*/
?>