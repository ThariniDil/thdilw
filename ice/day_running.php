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
<link href="css/style4.css" rel='stylesheet' type='text/css' />
<!-- menu -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<link href="css/ps1.css" rel="stylesheet" type="text/css">
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
			
    <div class="container" style="width:905px; position: relative; bottom:42px; margin-left: -14px;">

        <div class="col-md-4 col-md-offset-4">
            <div class="row vertical-offset" style="width: 251%;">

                <div class="panel panel-default" >
                    <div class="panel-heading" style="height: 34px;">
                    
                        <h3 class="panel-title">Travel Type: <b>AIRPORT DAY RUNNING</b></h3>
                    </div>
                    <div class="panel-body">


     <form id="form" action="post1.php" method="post">


                            <div class="form-group style-3 " style=" bottom: 12px; position: relative;">
                                <label>Client:</label><br />

                                <select class="turnintodropdown" name="clientname" style="height: 40px; width: 195px; ">
                                    <option value="">-Select Client-</option>
                                    <?php
//$sql = "SELECT * FROM passenger";
                                    $result = mysqli_query($con, "SELECT * FROM client");

                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['client']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 333px; bottom: 94px; position: relative; ">
                                <label>Passenger:</label><br />
                                <input type="text" name="passengername" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style=" bottom: 90px; position: relative; margin-left: 333px; ">
                                <label>Transfer Type:</label><br />
                                <select class="turnintodropdown" name="transfertype" required>
                                    <option value="">-Select Transfer Type-</option>
                                    <option value="Drop">Drop</option>
                                    <option value="Pickup">Pickup</option>
                                    <option value="Day_Running">Day_Running</option>
                                    <option value="Round_Day">Round_Day</option>
                                </select>
                            </div> 
                            <div class="form-group style-3" style="  bottom: 160px; position: relative; ">
                                Date : <br /> <input type="text" id="datepicker" name="date" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 333px; bottom: 135px ; position: relative;">
                                Request Time: <br /> <input class="time_element" id="timepicker11" name="timepicker11" type="text" name="requesttime" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style="bottom: 215px; position: relative;">
                                No of Pax: <br /> <input type="text" name="noofpax" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style="bottom: 220px; position: relative;">
                                No of Days: <br /> <input type="text" name="noofdays" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style="bottom: 215px; position: relative;">
                                Package Type:<br /><select class="turnintodropdown" name="packagetype" style="height: 40px; width: 195px;" required>

                                    <option value="England">England</option>
                                    <option value="Northern Ireland">Northern Ireland</option>
                                    <option value="Scotland">Scotland</option>
                                    <option value="Wales">Wales</option>
                                </select>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 333px; bottom: 287px; position: relative;">
                                Package Rate: <br /> <input type="text" name="packagerate" style="height: 30px;" required/>
                            </div>
                            <div class="form-group style-3 " style="bottom: 260px; position: relative;">
                                Pick up Location: <br /> <textarea id="txt" name="pickuplocation" cols="35" style="height: 40px;" rows="5" required></textarea>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 332px; bottom: 342px; position: relative;">
                                Drop Location: <br /> <textarea id="txt" name="droplocation" cols="35" style="height: 40px;" rows="5" required></textarea>
                            </div>


                            <div class="form-group style-3 " style=" margin-left: 333px; bottom: 170px; position: relative;">


                                R/O: <br /><input type="text" name="ro" required/>

                            </div>
                            <div class="form-group style-3 " style="bottom: 412px; position: relative;" >

                                Amount:<br />

                                <span class="symbol">LKR</span>

                                <input name="amount" type="text" style="height: 30px;" required/> .		



                            </div>
                            <div class="form group" style="bottom: 393px; position: relative;">
                                Payment Method:
                                  <div>
                                    <input type="radio" id="radio01" name="paymentmethod" value="Cash" required/>
                                    <label for="radio01"><span></span>Cash</label>
                                </div>

                                <div style="margin-left: 71px; position: relative; bottom: 26px;">
                                    <input type="radio" id="radio02" name="paymentmethod" value="Credits" required/>
                                    <label for="radio02"><span></span>Credits</label>
                                </div>

                                <div style="margin-left: 158px; position: relative; bottom: 51px;">
                                    <input type="radio" id="radio03" name="paymentmethod" value="C/c" required/>
                                    <label for="radio03"><span></span>C/c</label>
                                </div>
                            </div>

                            <div class="form-group style-3 " style="bottom: 581px; position: relative; margin-left: 333px;">	

                                <label>Vechicle Type</label><br />

                                <select class="turnintodropdown" name="vechicle" style="height: 40px; width: 195px; " required>
                                    <option value="">-Select Vechicle Type-</option>
                                    <?php
//$sql = "SELECT * FROM passenger";
                                    $result = mysqli_query($con, "SELECT * FROM vechicle");

                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['vechicle_type']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>



                            </div>

                            <div class="form-group style-3 " style=" margin-left: 333px; bottom: 575px; position: relative;">

                                Driver: <br/> <input type="text" name="driver" required/>

                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 4px; bottom: 560px; position: relative;">
                                Remark: <br /><textarea id="txt" name="remark" cols="35" style="height: 80px;" rows="10" required></textarea>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" name="submit" type="submit" value="submit" style="width: 100px; margin-left: 507px; bottom: 577px; position: relative;">






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
        $('#timepicker11').timepicki({
                show_meridian:false,
		min_hour_value:0,
		max_hour_value:23,
		step_size_minutes:15,
		overflow_minutes:true,
		increase_direction:'up',
		disable_keyboard_mobile: true
    });
 });
</script>


    </body>
</html>



