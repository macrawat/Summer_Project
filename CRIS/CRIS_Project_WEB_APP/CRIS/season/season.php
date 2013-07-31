<?php

session_start();

$state=$_SESSION['state'];
$city=$_SESSION['city'];

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

<div class="span2">
<div class="mask2"> 

				<!-- Add mousewheel plugin (this is optional) -->
                  <script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
                  <!-- Add fancyBox main JS and CSS files -->
                  <script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
                  <link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
                  <script type="text/javascript">
                    $(document).ready(function() {
                      $('.fancybox').fancybox();
                    });
                  </script>
                  <style type="text/css">
                    .fancybox-custom .fancybox-skin {
                      box-shadow: 0 0 50px #222;
                    }
                  </style>
                <!-- iframe --> 
                <div><a rel="prettyPhoto" class="fancybox fancybox.iframe" href="php/crop/crop.php?crop=<?php echo $crop;?>" title="<?php echo $crop;?>"><img src ="<?php echo $rowimage['IMAGE'];?>" width="120px" height="120px" alt="not available"></a></div>
<div class="inside">
<p>
	<center><?php echo $crop;?></center><br />
</div>
</div>
</div>
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
while($rowcrop = mysqli_fetch_array($result))
{
$crop = $rowcrop['CROP'];
$image = mysqli_query($con, "SELECT DISTINCT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>

<div class="span2">
<div class="mask2"> 

				<!-- Add mousewheel plugin (this is optional) -->
                  <script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
                  <!-- Add fancyBox main JS and CSS files -->
                  <script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
                  <link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
                  <script type="text/javascript">
                    $(document).ready(function() {
                      $('.fancybox').fancybox();
                    });
                  </script>
                  <style type="text/css">
                    .fancybox-custom .fancybox-skin {
                      box-shadow: 0 0 50px #222;
                    }
                  </style>
                <!-- iframe --> 
                <div><a rel="prettyPhoto" class="fancybox fancybox.iframe" href="php/crop/crop.php?crop=<?php echo $crop;?>" title="<?php echo $crop;?>"><img src ="<?php echo $rowimage['IMAGE'];?>" width="120px" height="120px" alt="not available"></a></div>
<div class="inside">
<p>
	<center><?php echo $crop;?></center><br />
</div>
</div>
</div>
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
while($rowcrop = mysqli_fetch_array($result))
{
$crop = $rowcrop['CROP'];
$image = mysqli_query($con, "SELECT DISTINCT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>

<div class="span2">
<div class="mask2"> 

				<!-- Add mousewheel plugin (this is optional) -->
                  <script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
                  <!-- Add fancyBox main JS and CSS files -->
                  <script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
                  <link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
                  <script type="text/javascript">
                    $(document).ready(function() {
                      $('.fancybox').fancybox();
                    });
                  </script>
                  <style type="text/css">
                    .fancybox-custom .fancybox-skin {
                      box-shadow: 0 0 50px #222;
                    }
                  </style>
                <!-- iframe --> 
                <div><a rel="prettyPhoto" class="fancybox fancybox.iframe" href="php/crop/crop.php?crop=<?php echo $crop;?>" title="<?php echo $crop;?>"><img src ="<?php echo $rowimage['IMAGE'];?>" width="120px" height="120px" alt="not available"></a></div>
<div class="inside">
<p>
	<center><?php echo $crop;?></center><br />
</div>
</div>
</div>
<?php
}
}
?>




