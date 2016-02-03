

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
<link href="css/style3.css" rel='stylesheet' type='text/css' />
<!-- menu -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<link href="css/ps3.css" rel="stylesheet" type="text/css">
<!-- //menu -->
<!-- Custom Theme files --><!--webfont-->
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

</head>
    <body data-vide-bg="video/ocean">
        <div class="center-container">	
			<div class="header">
			<div class="container to">
			<div class="navbar-header">
                            <a class="navbar-brand">Airport Travels</a>
			</div>
			<div class="top-nav">
				<nav class="top-nav-bottom cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
					 <h3>Menu</h3>
			                   <a href="pickup.php">Pickup/Drop</a>
						<a href="day_running.php">Day Running</a>
						<a href="round_day.php">Round Day</a>
						<a href="client.php">Client Form</a>
                                                <a href="vechicle.php">Vechicle Form</a>
                                                <a href="packagetype.php">Package Type Form</a>
                                                <a href="creditors.php">Creditors Form</a>
                                                <a href="viewdate.php">View Day Table</a>
                                                <a href="view.php">View Table</a>
                                                <a href="history.php">History Table</a>
                                                <a href="clientdata.php">Client Data Table</a>
                                                <a href="creport.php">Creditors Table</a>
                                                <a href="packagetable.php">Package Data Table</a>
						
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
			
    <div class="container" style="width:872px; position: relative; bottom:70px; margin-left: -14px;">

        <div class="col-md-4 col-md-offset-4">
            <div class="row vertical-offset" style="width: 251%;">

                <div class="panel panel-default" >
                    <div class="panel-heading" style="height: 34px;">
                    
                        <h3 class="panel-title"><b>VECHICLE FORM</b></h3>
                    </div>
                    <div class="panel-body">



   <form id="form" action="post4.php" method="post"> 
                            <div class="form-group style-3" style="  bottom: 05px; position: relative; ">
                                Vechicle Type: <br /> <input type="text" name="type" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style=" margin-left: 245px; bottom: 70px; position: relative;">
                                Brand: <br /> <input type="text" name="brand" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 245px; bottom: 71px ; position: relative;">
                                Model: <br /> <input type="text" name="model" style="height: 30px;" required />
                            </div>
                            <div class="form-group style-3 " style=" bottom: 123px; position: relative;">
                                Color: <br /> <input type="text" name="color" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style="bottom: 115px; position: relative;">
                                Manufactured Year: <br /><input type="text" id="datepicker" name="year" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style="margin-left: 245px; bottom: 181px ; position: relative;">
                                VRN: <br /> <input type="text" name="vrn" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style="margin-left: 245px; margin-bottom: 4px; bottom: 77px ; position: relative;">
                                Revenue License Number: <br /> <input type="text" name="rln" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style=" bottom: 222px; position: relative;">
                                Insurance Number: <br /><textarea id="txt" name="in" cols="35" style="height: 50px;" rows="10" required></textarea>
                            </div>
                            <div class="form-group style-3 " style="bottom: 220px ; position: relative;">
                                Miledge : <br /> <input type="text" name="miledge" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style=" bottom: 215px; position: relative;">
                                Owner Name: <br /><input type="text" name="name" style="height: 30px;" required />
                            </div>
                            <div class="form-group style-3 " style=" margin-left: 245px; bottom: 212px; position: relative;">
                                Owner Address: <br /><textarea id="txt" name="address" cols="35" style="height: 50px;" rows="10" required></textarea>
                            </div>
                            <div class="form-group style-3 " style=" bottom: 298px; position: relative;">
                                Owner Contact Number: <br /><input type="text" name="contactnumber" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-4 " style=" margin-left: 245px; bottom: 438px ; position: relative;">
                                Owner Email : <br /> <input type="email" name="email" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; bottom: 355px; position: relative;">
                                Remark: <br /><textarea id="txt" name="remark" cols="35" style="height: 80px;" rows="10" required></textarea>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" name="submit" type="submit" value="submit" style="width: 100px; margin-left: 504px; bottom: 380px; position: relative;">






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
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap.css"/>

<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">  
<script>
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/timepicki.css" rel="stylesheet">

<script src="js/jquery.js"></script>
<script src="js/timepicki.js"></script>
<script>
      $(document).ready(function () {
          $(".time_element").timepicki();
      });
</script>
  


    </body>
</html>



