<!DOCTYPE html>
<?php
//define variables
$p_state= " ";
$p_city= " ";
$season = " ";
$pins= $_GET['pincode'];
$state = $_GET['state'];
$city = $_GET['city'];
$today=date("M");
?>
<div style="font-size: 1em;font-weight: 400;margin: 0 0 1em 0;">click any crop to view details</div>
<?php
require 'check_season.php';
require 'db_con.php';


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
?>

<!--colorbox-->
<!-- Add jQuery library -->
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript">
$(document).ready(function() {
/* *  Simple image gallery. Uses default settings*/
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

<style>
	img
		{
		opacity:0.7;
		filter:alpha(opacity=40); /* For IE8 and earlier */
		}
		img:hover
		{
		opacity:1.0;
		filter:alpha(opacity=100); /* For IE8 and earlier */
		}
</style>

<!--fetch images of crops in location-->

<div style="float:left; margin-left: 1.5em">
<a class="fancybox fancybox.iframe" href="iframe.html"  title="<?php echo $crop;?>">
<img src ="<?php echo $rowimage['IMAGE']; ?>" width="100">
</a>
<br />
<p><!--a class="fancybox" href="#inline" title="<?php echo $crop;?>"--><?php echo $crop;?></p>
</div>
	
<?php
}
}
?>


