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
<link href="css/style5.css" rel='stylesheet' type='text/css' />
<!-- menu -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<link href="css/ps6.css" rel="stylesheet" type="text/css">
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
			
    <div class="container" style="width:1142px; position: relative; bottom:70px; margin-left: -182px;">

        <div class="col-md-4 col-md-offset-4">
            <div class="row vertical-offset" style="width: 251%;">

                <div class="panel panel-default" >
                    <div class="panel-heading" style="height: 34px;">
                    
                        <h3 class="panel-title"><b> CREDITORS TABLE</b></h3>
                    </div>
                    <div class="panel-body">



  

                             <?php
                            $start = 0;
                            $limit = 10;

                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $start = ($id - 1) * $limit;
                            }




//           if(isset($_POST['search'])) {
//             
//             
//             $search = $_POST['search_box'];
//             
//           
//       
//             $results = mysqli_query($con, "SELECT r.booking_id, r.invoice_id, r.tour_date, r.invoice_no, r.ticket_no, r.client_name, r.passenger_name, r.amount, r.due_date, r.payment_recieve_date, r.paid_by, r.cheque_no, r.payment_status, r.remark FROM creditors r ORDER BY r.tour_date ASC");
//             
//           }

                            $result = mysqli_query($con, "SELECT r.id, r.booking_id, r.invoice_id, r.tour_date, r.invoice_no, r.ticket_no, r.client_name, r.passenger_name, r.amount, r.due_date, r.payment_recieve_date, r.paid_by, r.cheque_no, r.payment_status, r.remark FROM creditor r ORDER BY r.tour_date ASC LIMIT $start, $limit");
                            ?>                 

                            <!--        <form name="search_form" method="POST" action="#">
                                        
                                        <input type="text" name="search_box" value="" />
                                        <input type="submit" name="search" value="search" />          
                                    </form>          -->

                            <table cellpadding="0" cellspacing="0" border="1" id="table" class="table table-hover" style="white-space: nowrap;">
                                <thead>
                                    <tr>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">ID</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Booking ID</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Invoice ID</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Client Name</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Passenger Name</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Invoice NO</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Ticket NO</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Tour Date</th>
                                  

                                    </tr>
                                </thead>





<?php
//var_dump($_POST);
//die();            
// $sql = ;


echo "<ul>";


while ($record = mysqli_fetch_array($result)) {

?>
 <tr data-toggle="collapse" data-target="#accordion_<?php echo $record['id']; ?>" class="clickable" >
     <?php

    //echo"<tr>";
    echo"<td style='text-align : center;'>" . $record['id'] . "</td>";
    echo"<td style='text-align : center;'>" . $record['booking_id'] . "</td>";
    echo"<td style='text-align : center;'>" . $record['invoice_id'] . "</td>";
    echo"<td style='text-align : center;'>" . $record['client_name'] . "</td>";
    echo"<td style='text-align : center;'>" . $record['passenger_name'] . "</td>";
    echo"<td style='text-align : center;'>" . $record['invoice_no'] . "</td>";
    echo"<td style='text-align : center;'>" . $record['ticket_no'] . "</td>";
    echo"<td style='text-align : center;'>" . $record['tour_date'] . "</td>";
  
    echo"<td><a href=\"edit1.php?id=" . $record["id"] . "\">Edit</a></td>";


    echo"</tr>";
    
                            $result1 = mysqli_query($con, "SELECT r.id, r.booking_id, r.invoice_id, r.tour_date, r.invoice_no, r.ticket_no, r.client_name, r.passenger_name, r.amount, r.due_date, r.payment_recieve_date, r.paid_by, r.cheque_no, r.payment_status, r.remark FROM creditor r  ORDER BY r.tour_date ASC LIMIT $start, $limit");
                                              while ($record1 = mysqli_fetch_array($result1)) {
                                                  ?>
                                            
                                            
                                     
                                        <tr>
                                            <td colspan="10">
                                                <div id="accordion_<?php echo $record['id']; ?>" class="collapse" style="margin-left: 30px;">
                                            <?php
                                            echo "<b>Due Date :-</b> ".$record1['due_date']."<br>";
                                            echo "<b>Payment Recieve Date :- </b>" . $record1['payment_recieve_date'] . "<br>";
                                            echo "<b>Paid By :- </b>".$record1['paid_by']."<br>";
                                            echo "<b>Cheque No :- </b> ".$record1['cheque_no']."<br>";
                                            echo "<b>Payment Status :- </b>".$record1['payment_status']."<br>";
                                            echo "<b>Remark :- </b>". $record1['remark'];
                                            
                                            echo"</tr>";
                                            
                                              }
                                           ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                            
                                        
                                        }
                                    

                                    echo "</ul>";
                                     
                                            
                                    ?> 




                            </table>



                            <?php
                            $rows = mysqli_num_rows(mysqli_query("SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , c.client, v.vechicle_type FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id ORDER BY t.request_time ASC"));
                            $total = ceil($rows / $limit);

                            if ($id > 1) {
                                echo "<a href='?id=" . ($id - 1) . "' class='btn btn-lg btn-success btn-block tp'>Previous</a>";
                            }


                            echo "<a href='?id=" . ($id + 1) . "' class='btn btn-lg btn-success btn-block tp' style='width= 93px;'>Next</a>";


                            echo "<ul class='page'>";
                            for ($i = 1; $i <= $total; $i++) {
                                if ($i == $id) {
                                    echo "<li class='current'>" . $i . "</li>";
                                } else {
                                    echo "<li><a href='?id=" . $i . "'>" . $i . "</a></li>";
                                }
                            }
                            echo "</ul>";
                            ?>



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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/timepicki.css" rel="stylesheet">






    </body>
</html>


