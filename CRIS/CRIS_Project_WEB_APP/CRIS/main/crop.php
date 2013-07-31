<html>
<div style="margin-right:10px;">
	<?php

		$crop=$_GET['crop'];
	?>
<img src ="crop_images/<?php echo $crop;?>.jpg" width="300px" height="300px" alt="not available">
</div>
<div style="margin-left:10px;">
<?php
 require 'php/db_con.php';
 $result = mysqli_query($con,"SELECT INFO FROM crop_images WHERE CROP='$crop'");

while($info = mysqli_fetch_array($result))
{
	if(empty($info))
	{
	echo "not found";
	}
else
{
	echo $info['INFO'];
}
}

?>
 
</div>
</html>
