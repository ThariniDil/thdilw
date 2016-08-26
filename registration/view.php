<?php
include './config.php';
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
						</script>
							}
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
                        <h2 class="panel-center-heading">Student Detials View</h2>
                 
                
                    </div>
                    <div class="panel-body" style="height: 606px;">



  
                           <?php
                          
                               


                            $result = mysqli_query($con, "SELECT * FROM `users`");
                            ?>                 

                   

                            <table cellpadding="0" cellspacing="0" border="1" id="table" class="table table-striped table-hover" style="white-space: nowrap;">
                                <thead>
                                    <tr>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">User ID</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Name</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Contact No</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Address</th>
                                     


                                    </tr>
                                </thead>





<?php
//var_dump($_POST);
//die();            
// $sql = ;


echo "<ul>";


while ($record = mysqli_fetch_array($result)) {



    echo"<tr>";
    echo"<td style='text-align : center;'>" . $record['id'] . "</td>";
    echo"<td style='text-align : center;'>" . $record['name'] . "</td>";
    echo"<td style='text-align : center;'>" . $record['phone_no'] . "</td>";
    echo"<td style='text-align : center;'>" . $record['address'] . "</td>";

    echo"<td><a href=\"edit3.php?id=" . $record["id"] . "\">Edit</a></td>";



    echo"</tr>";
}


echo "</ul>";
?>

                            </table>





                       

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


    </body>
</html>


<?php
include './config.php';



if(empty($_POST) === false) {
    
    $required_fields = array('username','password','password_again','first_name','email');
    
    //echo'<pre>' , print_r($_POST, true) , '</pre>';
    foreach ($_POST as $key=>$value) {
        
        
        if(empty($value) && in_array($key, $required_fields === true)) {
            
            $error[] = 'Fields marked with asterix are required';
            break 1;
            
            
        }
    }
    
    
    if(empty($errors) === true) {
        
        if(user_exists($_POST['username']) === true) {
            
            $errors[] = 'Sorry, the username \'' .$_POST['username'] . '\' is already taken';
            
        }
    }
    
    if(preg_match("/\\s/", $_POST['username']) == true) {
        
        
        $errors[] = 'Your username must not contain any space';
    }
    
    
    if(strlen($_POST['password']) < 6) {
        
        $errors[] = 'Your password must be at least 6 characters';
    }

    
    
    if(filter_val($_POST['email'], FILTER_VALIDATIONEMAIL)) {
        
        $errors[] = 'A valid email address is required';
        
    }
    
}




?>
