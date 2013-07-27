<!DOCTYPE html>
<html>
<?php
//define variables
$p_state= " ";
$p_city= " ";
$season = " ";
$pins= $_POST['pincode'];
$state = $_POST['state'];
$city = $_POST['city'];
$today=date("M");
//variables defined

//check for season
require 'check_season.php';
//checked

//connect to database
require 'db_con.php';
//connection made

//query to get state using pincode : $p_state : db used <pincode>
$val = mysqli_query($con, "SELECT STATE FROM pincode WHERE PIN='$pins'");//$pstate = mysqli_query($con,"SELECT STATE FROM pincode WHERE PIN='$pins'");
$row = mysqli_fetch_array($val);
$p_state = $row['STATE'];

//query to identify district using pincode : $p_city : db used <pincode>
$valc = mysqli_query($con, "SELECT CITY FROM pincode WHERE PIN='$pins'");
$rowc = mysqli_fetch_array($valc);
$p_city = $rowc['CITY'];

//get location : yourcity and yourstate : db used <season>
$print = mysqli_query($con,"SELECT STATE,DISTRICT FROM season WHERE STATE='$state' OR (STATE='$p_state' AND DISTRICT='$p_city')");
$rowyc = mysqli_fetch_array($print);
$yourcity= $rowyc['DISTRICT'];
$yourstate = $rowyc['STATE'];

//select Crop : $crop : db used <season>
$result = mysqli_query($con,"SELECT DISTINCT CROP FROM season WHERE STATE='$state' OR (STATE='$p_state' AND DISTRICT='$p_city') AND SEASON='$season'");

//print details
echo "Hello. You are from ".$yourcity." "."(".$yourstate.")";
echo "The season is ".$season."<br>";
echo "You may grow any of the following :"."<br>";
?>

<!--colorbox-->
<!-- Add jQuery library -->
	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
	<script type="text/javascript">
		$('#image').on('click',function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

		body {
			max-width: 100%;
			margin: 0 auto;
		}
	</style>
<!--colorbox-->	

<?php
while($rowcrop = mysqli_fetch_array($result))
{
$crop = $rowcrop['CROP'];
$image = mysqli_query($con, "SELECT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>
<!--fetch images of crops in location-->
<div style="float:left; margin-left: 1em">
<a class="fancybox" href="#inline" title="<?php echo $crop;?>">
<img id="image" src ="<?php echo $rowimage['IMAGE']; ?>" title="<?php echo $crop;?>" width="100px" height="100px" >
</a>
<br />
<p><!--a class="fancybox" href="#inline" title="<?php echo $crop;?>"--><?php echo $crop;?></p>

</div>	
<?php
}
}
?>

<!-- This contains the hidden content for inline calls -->
<div style='display:none'>
<div div id="inline" style="width:400px;display: none;">
<p>

<?php

include 'catch.php';
echo $title;
$output = mysqli_query($con, "SELECT * FROM daily_prices_table WHERE CROP='$title'");
echo "<table border='1'>
                          <tr>
                              <th>STATE</th>
                              <th>MARKET</th>
                              <th>CROP</th>
                              <th>ARRIVALS</th>
                              <th>UNIT OF ARRIVALS</th>
                              <th>ORIGIN</th>
                              <th>VARIETY</th>
                              <th>GRADE</th>
                              <th>MINIMUM PRICE</th>
                              <th>MAXIMUM PRICE</th>
                              <th>MODAL PRICE</th>
                              <th>UNIT OF PRICE</th> 
                              </tr>";
while($price= mysqli_fetch_array($output)){
       	echo "<tr>";
        echo "<td>" . $price['STATE'] . "</td>";
       	echo "<td>" . $price['MARKET'] . "</td>";
       	echo "<td>" . $price['CROP'] . "</td>";
       	echo "<td>" . $price['ARRIVALS'] . "</td>";
       	echo "<td>" . $price['UNIT OF ARRIVALS'] . "</td>";
       	echo "<td>" . $price['ORIGIN'] . "</td>";
       	echo "<td>" . $price['VARIETY'] . "</td>";
       	echo "<td>" . $price['GRADE'] . "</td>";
       	echo "<td>" . $price['MINIMUM PRICE'] . "</td>";
       	echo "<td>" . $price['MAXIMUM PRICE'] . "</td>";
       	echo "<td>" . $price['MODAL PRICE'] . "</td>";
       	echo "<td>" . $price['UNIT OF PRICE'] . "</td>";
       	echo "</tr>";
        "<br>";

}

        echo "</table>";
?>
</p>
</div>
</div>
</html>

