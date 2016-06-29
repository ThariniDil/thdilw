<?php
include_once 'dbconn.php';
$con = new DB_con();

// data insert code starts here.
if(isset($_POST['btn-save']))
{
 $fname = $_POST['first_name'];
 $lname = $_POST['last_name'];
 $city = $_POST['city_name'];
 
 $res=$con->insert($fname,$lname,$city);
 if($res)
 {
  ?>
  <script>
  alert('Record inserted...');
        window.location='index.php'
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error inserting record...');
        window.location='index.php'
        </script>
  <?php
 }
}
// data insert code ends here.

?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Ice Berg a Travel Agency Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Ice Berg Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<!-- menu -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- //menu -->
<!-- Custom Theme files --><!--webfont-->
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

</head>
    <body data-vide-bg="video/ocean">
        <div class="center-container">	
			<div class="header">
			<div class="container">
			<div class="navbar-header">
			  <a class="navbar-brand" href="index.html">Ice Berg <span>Registration</span></a>
			</div>
			<div class="top-nav">
				<nav class="top-nav-bottom cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
					 <h3>Menu</h3>
						<a href="in.php">Home</a>
						<a href="about.html">About us</a>
						<a href="gallery.html">Gallery</a>
						<a href="codes.html">Short Codes</a>
						<a href="contact.html">Contact</a>
						<div class="footer-top">
							<p>&copy; 2015 Ice Berg. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
						</div>
						<ul class="social-icons social-icons-sub">
							<li><a href="#" class="p"> </a></li>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="in"> </a></li>
						</ul>
				</nav>
				<div class="main buttonset">	
						<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
					<button id="showRightPush"><img src="images/menu.png" alt=""/></button>
				</div>
					<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
					<script src="js/classie.js"></script>
						<script>
							var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
							showRightPush = document.getElementById( 'showRightPush' ),
							body = document.body;

							showRightPush.onclick = function() {
								classie.toggle( this, 'active' );
								classie.toggle( body, 'cbp-spmenu-push-toleft' );
								classie.toggle( menuRight, 'cbp-spmenu-open' );
								disableOther( 'showRightPush' );
							};

							function disableOther( button ) {
								if( button !== 'showRightPush' ) {
									classie.toggle( showRightPush, 'disabled' );
								}
							}
						</script>
						<!-- /script-for-menu -->
			 </div>	
			<div class="clearfix"> </div>
			</div>
			</div>
            <div class="socials">
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4dd797b06396480a"></script>
            </div>
			<div class="box_1-top">
				  <div class="container" style="margin-left: -113px; position: relative; bottom: -128px;">

        <div class="col-md-4 col-md-offset-4">
            <div class="row vertical-offset" style="width: 200%;">

                <div class="panel panel-default" style="position: relative; bottom: 197px;">
                    <div class="panel-heading">
                        <h2 class="panel-center-heading">Airport Travels</h2>
                 
                
                    </div>
                    <div class="panel-body" style="height: 606px;">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
  
         </div>
                </div>
            </div>
        </div>

    </div>
			</div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/jquery.vide.min.js"></script>