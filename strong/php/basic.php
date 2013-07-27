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

while($rowcrop = mysqli_fetch_array($result))
{
$crop = $rowcrop['CROP'];
$image = mysqli_query($con, "SELECT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>
<!--fetch images of crops in location-->
<div class="image" style="float:left; margin-left:10px;">
<img src ="<?php echo $rowimage['IMAGE']; ?>" width="100px" height="100px">
<br />
<p><?php echo $crop;?></p>
</div>
<?php
}
}
?>

