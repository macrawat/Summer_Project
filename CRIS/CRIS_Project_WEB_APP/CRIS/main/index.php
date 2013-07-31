<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Agriculture Information System</title>
		
    <!--meta data-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--meta data-->
		
    

    <!-- Styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel='stylesheet' id='prettyphoto-css'  href="css/prettyPhoto.css" type='text/css' media='all'>
		<link href="css/fontello.css" type="text/css" rel="stylesheet">
		<!--[if lt IE 7]>
		<link href="css/fontello-ie7.css" type="text/css" rel="stylesheet">  
		<![endif]-->
		<!-- Google Web fonts -->
		<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		
		<style>body {padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */}</style>

		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		    
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon1.ico">
    <!-- share location -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeLzjWfDaqBze8j7qKJL17XH4ZsMjsTx0&sensor=true"></script>
		<script type="text/javascript" src="js/script.js"></script>
    <!-- share location -->
    <!-- JQuery -->
    
    <!-- JQuery-->
		    
		<!-- Load ScrollTo -->
		<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
		 
    <!-- Load ScrollTo -->
    <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
    <!-- Load LocalScroll -->
    <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
    <!-- prettyPhoto Initialization -->
    <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
          });
        </script>

	</head>
	
<!-- head section of the template ends here-->

<!-- body section of the template starts here-->

  <body>

	<!--******************** NAVBAR ********************-->
	  <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <h1 class="brand"><a href="#top">Crop Information System!</a></h1>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <nav class="pull-right nav-collapse collapse">
              <ul id="menu-main" class="nav">

                <li><a title="Mandi Prices" href="prices.php">Mandi</a></li>
                <li><a  href="#services" title="Mandi Price">Daily Prices</a></li>
                <!-- iframe -->
                  <!-- Add mousewheel plugin (this is optional) -->
                  <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
                  <!-- Add fancyBox main JS and CSS files -->
                  <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
                  <link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
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
                <li><a class="fancybox fancybox.iframe" href="../jvmaps/india-nic.html" title="Production per unit area">Map</a></li>
                <!-- iframe -->     
                <li><a class="fancybox fancybox.iframe" href="../map/INDIAMAP.html" title="Graph">Analyze</a></li>
                <li><a  href="#team" title="meet the team">Team</a></li>
                <li><a  href="#contact" title="contact us">Contact</a></li>
                <li><div style="float: right;">   <!--Google Translation-->
    <meta name="google-translate-customization" content="cb76643441bbe107-9969128f49d936dc-ga38eff30687748db-13"></meta>
<div style="float: right;" id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,gu,hi,kn,mr,ta,te,ur', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!--Google Translation Ends--></div>  </li>
              </ul>
            </nav>
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar-inner -->
      </div>
      <!-- /.navbar -->
    </div>
    <!-- /.navbar-wrapper -->
    <div id="top">
   
    </div>
    <!-- ******************** HeaderWrap ********************-->
    <div id="headerwrap">
      
      <!--header class="clearfix"-->
       <h1><span>CROP</span> Information System</h1>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!--h2>Signup for our Newsletter to be updated</h2-->
              <!--input type="text" name="your-email" placeholder="you@yourmail.com" class="cform-text" size="40" title="your email"-->
              <a href="#portfolio"><input type="submit" value="View Crops" class="cform-submit" width="80%"></a>
            </div>
          </div>
         
        </div>
      <!--/header-->
    </div>
	
 <!--******************** crop images here ********************-->

    <!--******************** Portfolio Section/crop-images & Details ********************-->
    <section id="portfolio" class="single-page scrollblock">
      <div class="container">
        <!--div class="align"><i class="icon-desktop-circled"></i></div-->
        <h1 id="folio-headline" style="margin-top:1em;">Crops</h1>
        <div class="row" id="crop_image"><!-- crop images come here --></div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
  
  <!--******************** map section ********************-->
        <!--Map starts here-->
        
        <!--******************** Prices Section ********************-->
    <section id="services" class="single-page scrollblock">
      <div class="container">
        <!--div class="align"><i class="icon-cog-circled"></i></div-->
        <h1>Prices</h1>
        <!-- Four columns -->
        <div class="row">
          <div class="span12">
            <style>


select {
    background:#7d7d7d;
    width: 290px;
    font-size: 24px;
    font-weight:bold;
    color:#424242;
    border: 1px solid #ccc;
    /*height: 34px;*/
}



table{
    width:95%;
    border-collapse:collapse;
    text-align:left;
    }

th{
    padding: 8px 12px;
    background-color:#babf3f;
    border:2px solid #1e1e1e;
    font-size:12px;
   
}
td{
    border:2px solid #1e1e1e;
    font-size:12px;


}
#heading{
    color:#7d7d7d;
    font-weight:bold;
    font-size:25px;
    font-family:serif;
}

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

  table, thead, tbody, th, td, tr { 
    display: block; 
  }
  
  thead tr { 
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  
  tr { border: 1px solid #ccc; }
  
  td { 
    border: none;
    border-bottom: 1px solid #eee; 
    position: relative;
    padding-left: 50%; 
  }
  
  td:before { 
    position: absolute;
    top: 6px;
    left: 6px;
    width: 45%; 
    padding-right: 10px; 
    white-space: nowrap;
  }
  
  td:nth-of-type(1):before { content: "District"; }
  td:nth-of-type(2):before { content: "Market"}
  td:nth-of-type(3):before { content: "Commodity"; }
  td:nth-of-type(4):before { content: "Variety"; }
  td:nth-of-type(5):before { content: "Arrival Date"; }
  td:nth-of-type(6):before { content: "Minimum Price"; }
  td:nth-of-type(7):before { content: "Maximum Price"; }
  td:nth-of-type(8):before { content: "Modal Price"; }
  }
  
  form {float:right;}
</style>

<?php
include 'php/db_con.php';

session_start();
// store session data
$state=$_SESSION['state'];
$value="Delhi";
if (strcasecmp($state,$value)==0)
{
  $state="NCT Of Delhi";
}

//$state=$_SESSION['state'];
$date=date("d/m/Y");
//$crop=$_SESSION['crop'];
$query= "SELECT * FROM daily_price WHERE State='$state' AND Arrival_Date='$date'";

$result = mysqli_query($con, $query);

echo "<center><label id=heading> Mandi Prices for $state on $date </label></center>";
echo "<table width=100%>
    <tr>
        <th>District</th>
        <th>Market</th>
        <th>Commodity</th>
        <th>Variety</th>
        <th>Arrival Date</th>
        <th>Minimum Price</th>
        <th>Maximum Price</th>
        <th>Modal Price</th>
    </tr>";
    if(!mysqli_fetch_array($result))
    {
      ?>
    <h2>NO UPDATES FOR <?php echo $date;?></h2>
    <?php
    $yesterday= date("d/m/Y", time()-86400);?>
    <center><h3>Prices on <?php echo $yesterday;?></h3></center>
    <?php
    $tuery= "SELECT * FROM daily_price WHERE State='$state' AND Arrival_Date='$yesterday'";
    $tesult = mysqli_query($con, $tuery);    
     while($towcrop = mysqli_fetch_array($tesult))
    {
    echo "<tr>";
      echo "<td>".$towcrop[1]."</td>";
      echo "<td>".$towcrop[2]."</td>";
      echo "<td>".$towcrop[3]."</td>";
      echo "<td>".$towcrop[4]."</td>";
      echo "<td>".$towcrop[5]."</td>";
      echo "<td>".$towcrop[6]."</td>";
      echo "<td>".$towcrop[7]."</td>";
      echo "<td>".$towcrop[8]."</td>";
      
      echo "</tr>";
    }

    }

else
  {
    while($rowcrop = mysqli_fetch_array($result))
{
echo "<tr>";
  echo "<td>".$rowcrop[1]."</td>";
  echo "<td>".$rowcrop[2]."</td>";
  echo "<td>" . $rowcrop[3] . "</td>";
  echo "<td>" . $rowcrop[4] . "</td>";
  echo "<td>" . $rowcrop[5] . "</td>";
  echo "<td>" . $rowcrop[6] . "</td>";
  echo "<td>" . $rowcrop[7] . "</td>";
  echo "<td>" . $rowcrop[8] . "</td>";
  
  echo "</tr>";

}
}
echo "</table>";

?>
</br>
<form align="right">
<input type="button" value="Print this page" onClick="window.print()">
</form>

          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>

        <!--END OF MAP-->

          
    <!--******************** Testimonials Section/price section ********************-->
    <section id="price" class="single-page hidden-phone">
      <div class="container">
        <div class="row">
          <div class="blockquote-wrapper">
            <blockquote class="mega">
              <div> </div>
            </blockquote>
          </div>
          <!-- /.blockquote-wrapper -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    
    <!--******************** News Section ********************-->
          <section id="visualize" class="single-page scrollblock">
      
	 <!-- Graph -->
          </section>

       <!--******************** Team Section ********************-->
          <section id="team" class="single-page scrollblock">
          <div class="container">
          <div class="align"><i class="icon-group-circled"></i></div>
          <h1>Meet the team</h1>
          <!-- Five columns -->
          <div class="row">
          <div class="span2 offset1">
          <div class="teamalign"> <img class="team-thumb img-circle" src="img/portrait-5.jpg" alt=""> </div>
          <h3>Anil</h3>
          <div class="job-position">Analyst</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
          <div class="teamalign"> <img class="team-thumb img-circle" src="img/portrait-2.jpg" alt=""> </div>
          <h3>Sharad</h3>
          <div class="job-position">Web Architect</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
          <div class="teamalign"> <img class="team-thumb img-circle" src="img/portrait-3.jpg" alt=""> </div>
          <h3>Ojasvi</h3>
          <div class="job-position">Designer</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
          <div class="teamalign"> <img class="team-thumb img-circle" src="img/portrait-4.jpg" alt=""> </div>
          <h3>Prashant</h3>
          <div class="job-position">Content Management</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
          <div class="teamalign"> <img class="team-thumb img-circle" src="img/portrait-1.jpg" alt=""> </div>
          <h3>Mac Rawat</h3>
          <div class="job-position">Web developer</div>
          </div>
          <!-- ./span2 -->
          </div>
          <!-- /.row -->
          <div class="row">
          <div class="span10 offset1">
          <hr class="featurette-divider">
          <div class="featurette">

          <div>
            Credits: 
          </div>
          <h2 class="featurette-heading">Idea Persons & Mentors <span class="muted"></span></h2>

<div class="row">
  <center>
          <div class="span1 offset1">
          <div class="teamalign"> <img class="team-thumb img-circle" src="mentors/amit_pundeer.jpg" alt=""> </div>
          <p style="font-size:12px;">Dr Amit Pundir</p>
          </div>
          <!-- ./span2 -->
          <div class="span1">
          <div class="teamalign"> <img class="team-thumb img-circle" src="mentors/senthil.jpg" alt=""> </div>
          <p style="font-size:12px;">Senthil Raja S</p>
          </div>
          <!-- ./span2 -->
          <div class="span1">
          <div class="teamalign"> <img class="team-thumb img-circle" src="mentors/sanjeev_singh.jpg" alt=""> </div>
          <p style="font-size:12px;">Dr. Sanjeev Singh</p>
          </div>
          <div class="span1">
          <div class="teamalign"> <img class="team-thumb img-circle" src="mentors/arun_ganesh.jpg" alt=""> </div>
          <p style="font-size:12px;">Arun Ganesh</p>
          </div>
          <div class="span1">
          <div class="teamalign"> <img class="team-thumb img-circle" src="mentors/sub.jpg" alt=""> </div>
          <p style="font-size:12px;">Shubranshu Mohapatra</p>
          </div>
          <div class="span1">
          <div class="teamalign"> <img class="team-thumb img-circle" src="mentors/Satya.jpg" alt=""> </div>
          <p style="font-size:12px;">Satyakaam Goswami</p>
          </div>
                   
</center>
        </div>
          </br>
        </br>
      </br></br>
        </br>
      </br></br>
        </br>
      
          <marquee behavior="alternate" direction="left">
  
          <img src = "links/aghead.gif" width = "250" height="50" alt="Agmarknet">
          <img src = "links/logo.jpg" width = "200" height="50" alt="NCPAH">
          <img src = "links/logo1.jpg" width = "250" height="50" alt="Spices Board India">
          <img src = "links/data_gov_in.png" width = "150" height="40" alt="DATA.GOV.IN"> 
          <img src = "links/banner.jpg" width = "400" height="50" alt="National Horticulture Board">
          <img src = "links/fao.png" width = "300" height="50" alt="FAO">

          </marquee>

           
          </div>
          <!-- /.featurette -->
          <hr class="featurette-divider">
          </div>
          <!-- .span10 -->
          </div>
          <!-- /.row -->
          </div>
      <!-- /.container -->
          </section>
   
 <!--******************** Contact Section ********************-->
   <script type="text/javascript" src="../feedback/validate.js"></script>
    <section id="contact" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-mail-2"></i></div>
        <h1>Contact us now!</h1>
        <div class="row">
          <div class="span12">
            <div class="cform" id="theme-form">
              <form action="../feedback/email.php" method="post" class="cform-form" onsubmit ="return validateForm()">
                <div class="row">
                  <div class="span6"> <span class="your-name">
                    <input type="text" name="your-name" id="your-name" placeholder="Your Name" class="cform-text" size="40" title="your name" required>
                    </span> </div>
                  <div class="span6"> <span class="your-email">
                    <input type="text" name="your-email" id="your-email" placeholder="Your Email" class="cform-text" size="40" title="your email" required>
                    </span> </div>
                </div>
                <div class="row">
                  <div class="span6"> <span class="institution">
                    <input type="text" name="company" id="company" placeholder="Your Institution" class="cform-text" size="40" title="company" >
                    </span> </div>
                  <div class="span6"> <span class="website">
                    <input type="text" name="website" id="website" placeholder="Your Website" class="cform-text" size="40" title="website">
                    </span> </div>
                </div>
                <div class="row">
                  <div class="span12"> <span class="message">
                    <textarea name="message" id="message" placeholder="Give us your feedback" class="cform-textarea" cols="40" rows="10" title="drop us a line." required></textarea>
                    </span> </div>
                </div>
                <div>
                  <input type="submit" value="Send message" class="cform-submit pull-left">
                </div>
                <div class="cform-response-output"></div>
              </form>
            </div>
          </div>
          <!-- ./span12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    <div class="footer-wrapper">
      <div class="container">
        <footer>
          <small>&copy; All Rights Reserved. Team Mavericks, IIC UDSC. </small>
        </footer>
      </div>
      <!-- ./container -->
    </div>
    <!-- Loading the javaScript at the end of the page -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <!--script type="text/javascript" src="js/site.js"></script-->
    </body>
    </html>
