<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Crop Price System</title>
		
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
		<link rel="shortcut icon" href="img/favicon.ico">
    <!-- share location -->
		<script type="text/javascript" src="js/jquery.js"></script>
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
                <li><a title="today's price" href="price_app.php">Today's Prices</a></li>
                <li><a title="compare" href="#compare">Compare</a></li>
                <li><a title="team" href="#team" title="meet the team">Team</a></li>
                <li><a title="contact" href="#contact" title="contact us">Contact</a></li>
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
              <a href="#contact"><input type="submit" value="Subscibe" class="cform-submit"></a>
            </div>
          </div>
          <div class="row">
            <div class="span12">
              <!--<ul class="icon">
                <li><a href="#" target="_blank"><i class="icon-pinterest-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-facebook-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-twitter-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-gplus-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-skype-circled"></i></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      <!--/header-->
    </div>
	
    <!--******************** Portfolio Section/crop-images & Details ********************-->
    <section id="today" class="single-page scrollblock">
      <div class="container">
        <!--div class="align"><i class="icon-desktop-circled"></i></div-->
        <h1 id="folio-headline"><?php echo date("d/m/Y");?></h1>
        <div class="row">
          <div class="span3">
                <nav id="crop_category">
                      <ul id="menu" style="list-style:none;padding:12px;margin:2px;background:#272727;color:#716d62;font-size:24px;font-weight:bold;">
                        <li>
                            <label id="category_label"><a href="/categories/1">Beverages</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/2">Cereals</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/3">Drug and Narcotics</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/4">Dry Fruits</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/5">Fibre Crops</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/6">Flowers</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/7">Forest Products</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/8">Fruits</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/9">Live Stock,Poultry,Fisheries</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/10">Oil Seeds</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/11">Other</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/12">Pulses</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/13">Spices</a></label>
                        </li>
                        <li>
                            <label id="category_label"><a href="/categories/14">Vegetables</a></label>
                        </li>
                      </ul>          
                </nav>      
          </div>
          <div class="span9">
            <div id="category_label">
            </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
  
   <!--******************** Contact Section ********************-->
    <section id="contact" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-mail-2"></i></div>
        <h1>Contact us now!</h1>
        <div class="row">
          <div class="span12">
            <div class="cform" id="theme-form">
              <form action="#" method="post" class="cform-form">
                <div class="row">
                  <div class="span6"> <span class="your-name">
                    <input type="text" name="your-name" placeholder="Your Name" class="cform-text" size="40" title="your name">
                    </span> </div>
                  <div class="span6"> <span class="your-email">
                    <input type="text" name="your-email" placeholder="Your Email" class="cform-text" size="40" title="your email">
                    </span> </div>
                </div>
                <div class="row">
                  <div class="span6"> <span class="company">
                    <input type="text" name="company" placeholder="Your Company" class="cform-text" size="40" title="company">
                    </span> </div>
                  <div class="span6"> <span class="website">
                    <input type="text" name="website" placeholder="Your Website" class="cform-text" size="40" title="website">
                    </span> </div>
                </div>
                <div class="row">
                  <div class="span12"> <span class="message">
                    <textarea name="message" class="cform-textarea" cols="40" rows="10" title="drop us a line."></textarea>
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
          <small>&copy; .</small>
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
