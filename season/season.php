<?php

$state="Delhi";
$city="Delhi";
$today=date("M");
if ($today=="Jul"||"Aug"||"Sep")
	{
	$season1 = "Kharif";
	$season2="Rabi";
//	echo $season;
	}	

else if ($today=="Oct"||"Nov"||"Dec"||"Jan"||"Feb")
	{
	$season1 = "Rabi";
	$season2 = "Kharif";
	}
$con=mysqli_connect("localhost","root","","mavericks");
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
	
	echo "<ul><li><a href='#".$season1."'>".$season1."</a>";
	echo "<li><a href='#".$season2."'>".$season2."</a>";
	echo "<li><a href='#Whole Year'>Whole Year</a></ul>";
	
	/*----------Distinct crops for season 1--------------*/
	echo "<center><h1>".$season1." Crops </h1></center>";
	echo "<center><p id=".$season1." ></p></center>";
$result = mysqli_query($con,"SELECT DISTINCT CROP FROM season WHERE STATE='$state' AND DISTRICT='$city' AND SEASON='$season1'");
while($rowcrop = mysqli_fetch_array($result))
{
$crop = $rowcrop['CROP'];
$image = mysqli_query($con, "SELECT DISTINCT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>
 <a href="index.html" rel="prettyPhoto" title="<?php echo $crop;?>"><img src ="<?php echo $rowimage['IMAGE']; ?>"></a>

<hgroup>
<h2><?php echo $crop;?></h2>
</hgroup>
<?php
}
}

/*----------Distinct crops for season 2--------------*/
	echo "<center><h1>".$season2." Crops </h1></center>";
	echo "<center><p id=".$season2."><p></center>";
$result = mysqli_query($con,"SELECT DISTINCT CROP FROM season WHERE STATE='$state' AND DISTRICT='$city' AND SEASON='$season2'");
while($rowcrop = mysqli_fetch_array($result))
{
$crop = $rowcrop['CROP'];
$image = mysqli_query($con, "SELECT DISTINCT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>
 <a href="index.html" rel="prettyPhoto" title="<?php echo $crop;?>"><img src ="<?php echo $rowimage['IMAGE']; ?>"></a>

<hgroup>
<h2><?php echo $crop;?></h2>
</hgroup>
<?php
}
}


/*----------Distinct crops for Whole season --------------*/
	echo "<center><h1 id='Whole Year'>Whole Year Crops </h1></center>";
$result = mysqli_query($con,"SELECT DISTINCT CROP FROM season WHERE STATE='$state' AND DISTRICT='$city' AND SEASON='Whole year'");
while($rowcrop = mysqli_fetch_array($result))
{
$crop = $rowcrop['CROP'];
$image = mysqli_query($con, "SELECT DISTINCT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>
 <a href="index.html" rel="prettyPhoto" title="<?php echo $crop;?>"><img src ="<?php echo $rowimage['IMAGE']; ?>"></a>

<hgroup>
<h2><?php echo $crop;?></h2>
</hgroup>
<?php
}
}
?>




