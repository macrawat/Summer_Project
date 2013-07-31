<?php
      
      $state=$_POST['state'];
      $city=$_POST['city'];

      session_start();
      // store session data
      $_SESSION['state']=$state;
      $_SESSION['city']=$city;

      $today=date("M");
      if ($today=="Jul"||"Aug"||"Sep")
        {
        $season1 = "Kharif";
        $season2="Rabi";
      //  echo $season;
        } 

      else if ($today=="Oct"||"Nov"||"Dec"||"Jan"||"Feb")
        {
        $season1 = "Rabi";
        $season2 = "Kharif";
        }

        require 'db_con.php';
   
?> 
        <div><center><h2>The Season is <?php echo $season1;?></h2></center></div>

<!--Distinct crops for season 1-->
<div class="row" id="<?php echo $season1;?>">
<center><h2><?php echo $season1;?> Crops </h2></center>
<br />

<?php
$result = mysqli_query($con,"SELECT DISTINCT CROP FROM season WHERE STATE='$state' AND SEASON='$season1'");
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
                <div><a rel="prettyPhoto" class="fancybox fancybox.iframe" href="../main/crop.php?crop=<?php echo $crop;?>" title="<?php echo $crop;?>"><img src ="<?php echo $rowimage['IMAGE'];?>" width="120px" height="120px" alt="not available"></a></div>
<div class="inside">
<p><center><?php echo $crop;?></center></p><br />
</div>
</div>
</div>
<?php
}
}
?>
</div>


<!--Distinct crops for season 2-->
<div class="row" id="<?php echo $season2;?>">
<center><h2><?php echo $season2;?> Crops </h2></center>
<br />

<?php
$result = mysqli_query($con,"SELECT DISTINCT CROP FROM season WHERE STATE='$state' AND SEASON='$season2'");
while($rowcrop = mysqli_fetch_array($result))
{
$crop = $rowcrop['CROP'];
$image = mysqli_query($con, "SELECT DISTINCT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>

<div class="span2">
<div class="mask2"> 

                <!-- iframe --> 
                <div><a rel="prettyPhoto" class="fancybox fancybox.iframe" href="../main/crop.php?crop=<?php echo $crop;?>" title="<?php echo $crop;?>"><img src ="<?php echo $rowimage['IMAGE'];?>" width="120px" height="120px" alt="not available"></a></div>
<div class="inside">
<p><center><?php echo $crop;?></center></p><br />
</div>
</div>
</div>
<?php
}
}
?>
</div>

<!--Distinct crops for Whole season -->
<div class="row" id='Whole Year'>
<center><h2>Whole Year Crops </h2></center>
<br />

<?php
$result = mysqli_query($con,"SELECT DISTINCT CROP FROM season WHERE STATE='$state' AND SEASON='Whole year'");
while($rowcrop = mysqli_fetch_array($result))
{
$crop = $rowcrop['CROP'];
$image = mysqli_query($con, "SELECT DISTINCT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>

<div class="span2">
<div class="mask2"> 

                 <!-- iframe --> 
                <div><a rel="prettyPhoto" class="fancybox fancybox.iframe" href="../main/crop.php?crop=<?php echo $crop;?>" title="<?php echo $crop;?>"><img src ="<?php echo $rowimage['IMAGE'];?>" width="120px" height="120px" alt="not available"></a></div>
<div class="inside">
<p>  <center><?php echo $crop;?></center></p><br />
</div>
</div>
</div>
<?php
}
}
?>
</div>





