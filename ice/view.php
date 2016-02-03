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
<link href="css/ps5.css" rel="stylesheet" type="text/css">
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
			
    <div class="container" style="width:1370px; position: relative; bottom:70px; margin-left: -330px;">

        <div class="col-md-4 col-md-offset-4">
            <div class="row vertical-offset" style="width: 251%;">

                <div class="panel panel-default" >
                    <div class="panel-heading" style="height: 34px;">
                    
                        <h3 class="panel-title"><b>VIEW TABLE</b></h3>
                    </div>
                    <div class="panel-body">



  

                             <?php
                            if (isset($_POST['search'])) {
                                $valueToSearch = $_POST['valueToSearch'];
                                // search in all table columns
                                // using concat mysql function
                                $query = "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , t.select_option , c.client, c.tel, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id  WHERE `client` LIKE '%" . $valueToSearch . "%'";

                                $search_result = mysqli_query($con, $query);
                                //echo "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , c.client, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id WHERE CONCAT(`id`, `date`) LIKE '%".$valueToSearch."%'";
                                //die();
                            }

// function to connect and execute the query
                            ?>

                            <?php
                            if (isset($_POST['search1'])) {
                                $value = $_POST['value'];
                                // search in all table columns
                                // using concat mysql function
                                $query1 = "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , t.select_option , c.client, c.tel, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id WHERE `tel`  LIKE '%" . $value . "%'";

                                $search_result1 = mysqli_query($con, $query1);
                                //echo "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , c.client, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id WHERE CONCAT(`id`, `date`) LIKE '%".$valueToSearch."%'";
                                //die();
                            }

// function to connect and execute the query
                            ?>

                            <?php
                            if (isset($_POST['search2'])) {
                                $value1 = $_POST['value1'];
                                $value2 = $_POST['value2'];
                                // search in all table columns
                                // using concat mysql function
                                // $query2 = "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , c.client, c.tel, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id  WHERE `date` >= '%" . $value1 . "%' AND `date` <=  '%" . $value2 . "%'";

                                $search_result2 = mysqli_query($con, "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.select_option, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , c.client, c.tel, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id  WHERE `date` BETWEEN '" . $value1 . "' AND '" . $value2 . "'");
//                                echo "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , c.client, c.tel, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id  WHERE `date` BETWEEN '" . $value1 . "' AND '" . $value2 . "'";
//                                die();
                            }

// function to connect and execute the query
                            ?>

                            <?php
                            $start = 0;
                            $limit = 10;

                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $start = ($id - 1) * $limit;
                            }


                            $statuscolor = array(
                                "Pending" => "#FFFFFF",
                                "Dispatched" => "#4dff4d",
                                "Cancel" => "#FF0000"
                            );



                            $result = mysqli_query($con, "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , t.select_option , c.client, c.tel, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id  WHERE MONTH(t.date) = MONTH(CURDATE()) ORDER BY t.request_time ASC LIMIT $start, $limit");
                            ?>                 

                            <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">    
                                <div class="panel panel-default"> <a title="Tab 1" aria-controls="collapse1" aria-expanded="false" href="#collapse1" data-parent="#accordion" data-toggle="collapse" id="heading1" role="tab" class="panel-heading collapsed" style="background-color: #407F8E;"><span class="panel-title">Search</span> </a>
                                    <div aria-labelledby="heading1" role="tabpanel" class="panel-collapse collapse" id="collapse1" aria-expanded="false">
                                        <div class="panel-body" style="height: 140px;">
                                            <form action="#" method="post">
                                                <div>
                                                    <input type="text" name="valueToSearch" placeholder="Value To Search">
                                                    <input type="submit" name="search" value="Search Name"><br><br>  
                                                </div>
                                                <div style="margin-left: 350px; bottom: 45px;  position: relative;">
                                                    <input type="text" name="value" placeholder="Value To Search">
                                                    <input type="submit" name="search1" value="Search Number"><br><br> 
                                                </div>
                                                <div>
                                                    From :<input type="text" name="value1" id="datepicker"  placeholder="Value To Search">
                                                    To :<input type="text" name="value2" id="datepicker1" placeholder="Value To Search">
                                                    <input type="submit" name="search2" value="Search Date"><br><br> 
                                                </div>

                                            </form>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table cellpadding="0" cellspacing="0" border="1" class="table  table-hover" style="white-space: nowrap;">
                               
                                    <tr>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">ID</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Client</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Contact number</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Passenger</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Transfer Type</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Date</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Request Time</th>
                                        <th style="font-weight: bold; width: 1%; text-align: center;">Status</th>

                    
                                    </tr>                                 






                                <?php
//var_dump($_POST);
//die();            
// $sql = ;


                                echo "<ul>";
                                if (isset($_POST['search'])) {
                                    $i = 0;

                                    while ($record = mysqli_fetch_array($search_result)) {
                                        ?>
                                        <tr data-toggle="collapse" data-target="#accordion_<?php echo $record['id']; ?>" class="clickable" style="background-color: <?php if ($record['select_option'] == "Dispatched") { ?>#4dff4d;<?php } else if ($record['select_option'] == "Pending") { ?>#FFFFFF<?php } else if ($record['select_option'] == "Cancel") { ?>#FF0000<?php } ?>">                   
                                            <?php
                                            echo"<td style='text-align : center;'>" . $record['id'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['client'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['tel'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['passenger'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['transfer_type'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['date'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['request_time'] . "</td>";
                                                                                    
                                         
                                            echo"<td>";
                                            echo'<form id="form' . $i . '" action="sub1.php" method="post" style="height: 1px;">
                  <select name="status" class="turnintodropdown" onchange="myJSFunction(this)" style="width: 115px; height: 10px;">
                    <option></option>
                    <option value="Dispatched">Dispatched</option>
                    <option value="Pending">Pending</option>
                    <option value="Cancel">Cancel</option>
                </select>
                <input type="hidden" name="id" value="' . $record['id'] . '" />
                <input type="submit" value="save" style="position: relative; bottom: 10px;"/>
                </form>';
                                            echo"</td>";
                                            echo"<td><a href=\"edit.php?id=" . $record['id'] . "\">Edit</a></td>";

                                            echo"</tr>";
                                                                               
              
                                                 
                 
                                       $result2 = mysqli_query($con, "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , t.select_option , c.client, c.tel, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id  WHERE MONTH(t.date) = MONTH(CURDATE()) AND t.id='{$record['id']}' ORDER BY t.request_time ASC LIMIT $start, $limit");
                                              while ($record2 = mysqli_fetch_array($result2)) {
                                                  ?>
                                            
                                            
                                     
                                        <tr>
                                            <td colspan="9">
                                                <div id="accordion_<?php echo $record['id']; ?>" class="collapse" style="margin-left: 30px;">
                                            <?php
                                            echo "<b>Number of Package :-</b> ".$record1['no_of_pax']."<br>";
                                            echo "<b>Flight Time :- </b>" . $record1['flight_time'] . "<br>";
                                            echo "<b>Flight No :- </b>".$record1['flight_no']."<br>";
                                            echo "<b>Package Type :- </b> ".$record1['package_type']."<br>";
                                            echo "<b>Pick Up Location :- </b>".$record1['pick_up_location']."<br>";
                                            echo "<b>Drop Location :- </b> ".$record1['drop_location']."<br>";
                                            echo "<b>Vechicle Type:-</b> ".$record1['vechicle_type']."<br>";
                                            echo "<b>Amount :- </b>LKR " . $record1['amount'] . ".00"."<br>";
                                            echo "<b>Payment Method :- </b>".$record1['payment_method']."<br>";
                                            echo "<b>Driver :- </b>".$record1['driver']."<br>";
                                            echo "<b>RO :- </b>".$record1['ro']."<br>";
                                            echo "<b>Remark :- </b>". $record1['remark'];
                                            
                                            //echo"</tr>";
                                            
                                              }
                                           ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                            
                                         $i++;   
                                        }
                                        ?>
                                        
                                          <?php
                                    }

                                     
                                      
                                        else if (isset($_POST['search1'])) {
                                        $i = 0;

                                        while ($record = mysqli_fetch_array($search_result1)) {
                                            ?>
                                        <tr data-toggle="collapse" data-target="#accordion_<?php echo $record['id']; ?>" class="clickable" style="background-color: <?php if ($record['select_option'] == "Dispatched") { ?>#4dff4d;<?php } else if ($record['select_option'] == "Pending") { ?>#FFFFFF<?php } else if ($record['select_option'] == "Cancel") { ?>#FF0000<?php } ?>">                   
                                            <?php
                                            echo"<td style='text-align : center;'>" . $record['id'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['client'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['tel'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['passenger'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['transfer_type'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['date'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['request_time'] . "</td>";
                                            
                                            echo"<td>";
                                            echo'<form id="form' . $i . '" action="sub1.php" method="post" style="height: 1px;">
                  <select name="status" class="turnintodropdown" onchange="myJSFunction(this)" style="width: 115px; height: 10px;">
                    <option></option>
                    <option value="Dispatched">Dispatched</option>
                    <option value="Pending">Pending</option>
                    <option value="Cancel">Cancel</option>
                </select>
                <input type="hidden" name="id" value="' . $record['id'] . '" />
                <input type="submit" value="save" style="position: relative; bottom: 10px;"/>
                </form>';
                                            echo"</td>";
                                            echo"<td><a href=\"edit.php?id=" . $record['id'] . "\">Edit</a></td>";

                                            echo"</tr>";

                                         $result2 = mysqli_query($con, "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , t.select_option , c.client, c.tel, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id  WHERE MONTH(t.date) = MONTH(CURDATE()) AND t.id='{$record['id']}' ORDER BY t.request_time ASC LIMIT $start, $limit");
                                              while ($record2 = mysqli_fetch_array($result2)) {
                                                  ?>
                                            
                                            
                                     
                                        <tr>
                                            <td colspan="9">
                                                <div id="accordion_<?php echo $record['id']; ?>" class="collapse" style="margin-left: 30px;">
                                            <?php
                                            echo "<b>Number of Package :-</b> ".$record1['no_of_pax']."<br>";
                                            echo "<b>Flight Time :- </b>" . $record1['flight_time'] . "<br>";
                                            echo "<b>Flight No :- </b>".$record1['flight_no']."<br>";
                                            echo "<b>Package Type :- </b> ".$record1['package_type']."<br>";
                                            echo "<b>Pick Up Location :- </b>".$record1['pick_up_location']."<br>";
                                            echo "<b>Drop Location :- </b> ".$record1['drop_location']."<br>";
                                            echo "<b>Vechicle Type:-</b> ".$record1['vechicle_type']."<br>";
                                            echo "<b>Amount :- </b>LKR " . $record1['amount'] . ".00"."<br>";
                                            echo "<b>Payment Method :- </b>".$record1['payment_method']."<br>";
                                            echo "<b>Driver :- </b>".$record1['driver']."<br>";
                                            echo "<b>RO :- </b>".$record1['ro']."<br>";
                                            echo "<b>Remark :- </b>". $record1['remark'];
                                            
                                            //echo"</tr>";
                                            
                                              }
                                           ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                            
                                         $i++;   
                                        }
                                        ?>
                                        
                                          <?php
                                    } else if (isset($_POST['search2'])) {
                                        $i = 0;

                                        while ($record = mysqli_fetch_array($search_result2)) {
                                            ?>
                                        <tr data-toggle="collapse" data-target="#accordion_<?php echo $record['id']; ?>" class="clickable" style="background-color: <?php if ($record['select_option'] == "Dispatched") { ?>#4dff4d;<?php } else if ($record['select_option'] == "Pending") { ?>#FFFFFF<?php } else if ($record['select_option'] == "Cancel") { ?>#FF0000<?php } ?>">                   
                                            <?php
                                            echo"<td style='text-align : center;'>" . $record['id'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['client'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['tel'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['passenger'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['transfer_type'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['date'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['request_time'] . "</td>";
                                            
                                            echo"<td>";
                                            echo'<form id="form' . $i . '" action="sub1.php" method="post" style="height: 1px;">
                  <select name="status" class="turnintodropdown" onchange="myJSFunction(this)" style="width: 115px; height: 10px;">
                    <option></option>
                    <option value="Dispatched">Dispatched</option>
                    <option value="Pending">Pending</option>
                    <option value="Cancel">Cancel</option>
                </select>
                <input type="hidden" name="id" value="' . $record['id'] . '" />
                <input type="submit" value="save" style="position: relative; bottom: 10px;"/>
                </form>';
                                            echo"</td>";
                                            echo"<td><a href=\"edit.php?id=" . $record['id'] . "\">Edit</a></td>";

                                            echo"</tr>";

                                          $result2 = mysqli_query($con, "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , t.select_option , c.client, c.tel, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id  WHERE MONTH(t.date) = MONTH(CURDATE()) AND t.id='{$record['id']}' ORDER BY t.request_time ASC LIMIT $start, $limit");
                                              while ($record2 = mysqli_fetch_array($result2)) {
                                                  ?>
                                            
                                            
                                     
                                        <tr>
                                            <td colspan="9">
                                                <div id="accordion_<?php echo $record['id']; ?>" class="collapse" style="margin-left: 30px;">
                                            <?php
                                            echo "<b>Number of Package :-</b> ".$record1['no_of_pax']."<br>";
                                            echo "<b>Flight Time :- </b>" . $record1['flight_time'] . "<br>";
                                            echo "<b>Flight No :- </b>".$record1['flight_no']."<br>";
                                            echo "<b>Package Type :- </b> ".$record1['package_type']."<br>";
                                            echo "<b>Pick Up Location :- </b>".$record1['pick_up_location']."<br>";
                                            echo "<b>Drop Location :- </b> ".$record1['drop_location']."<br>";
                                            echo "<b>Vechicle Type:-</b> ".$record1['vechicle_type']."<br>";
                                            echo "<b>Amount :- </b>LKR " . $record1['amount'] . ".00"."<br>";
                                            echo "<b>Payment Method :- </b>".$record1['payment_method']."<br>";
                                            echo "<b>Driver :- </b>".$record1['driver']."<br>";
                                            echo "<b>RO :- </b>".$record1['ro']."<br>";
                                            echo "<b>Remark :- </b>". $record1['remark'];
                                            
                                            //echo"</tr>";
                                            
                                              }
                                           ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                            
                                         $i++;   
                                        }
                                        ?>
                                        
                                          <?php
                                    } else {
                                        $i = 0;

                                        while ($record = mysqli_fetch_array($result)) {
                                            ?>
                                        <tr data-toggle="collapse" data-target="#accordion_<?php echo $record['id']; ?>" class="clickable" style="background-color: <?php if ($record['select_option'] == "Dispatched") { ?>#4dff4d;<?php } else if ($record['select_option'] == "Pending") { ?>#FFFFFF<?php } else if ($record['select_option'] == "Cancel") { ?>#FF0000<?php } ?>">                   
                                            <?php
                                            echo"<td style='text-align : center;'>" . $record['id'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['client'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['tel'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['passenger'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['transfer_type'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['date'] . "</td>";
                                            echo"<td style='text-align : center;'>" . $record['request_time'] . "</td>";
                                         
                                            echo"<td>";
                                            echo'<form id="form' . $i . '" action="sub1.php" method="post" style="height: 1px;">
                  <select name="status" class="turnintodropdown" onchange="myJSFunction(this)" style="width: 115px; height: 10px;">
                    <option></option>
                    <option value="Dispatched">Dispatched</option>
                    <option value="Pending">Pending</option>
                    <option value="Cancel">Cancel</option>
                </select>
                <input type="hidden" name="id" value="' . $record['id'] . '" />
                <input type="submit" value="save" style="position: relative; bottom: 10px;"/>
                </form>';
                                            echo"</td>";
                                            echo"<td><a href=\"edit.php?id=" . $record['id'] . "\">Edit</a></td>";

                                            echo"</tr>";

                                            
                                            $result1 = mysqli_query($con, "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , t.select_option , c.client, c.tel, v.vechicle_type  FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id  WHERE MONTH(t.date) = MONTH(CURDATE()) AND t.id='{$record['id']}' ORDER BY t.request_time ASC LIMIT $start, $limit");
                                              while ($record1 = mysqli_fetch_array($result1)) {
                                                  ?>
                                            
                                            
                                     
                                        <tr>
                                            <td colspan="9">
                                                <div id="accordion_<?php echo $record['id']; ?>" class="collapse" style="margin-left: 30px;">
                                            <?php
                                            echo "<b>Number of Package :-</b> ".$record1['no_of_pax']."<br>";
                                            echo "<b>Flight Time :- </b>" . $record1['flight_time'] . "<br>";
                                            echo "<b>Flight No :- </b>".$record1['flight_no']."<br>";
                                            echo "<b>Package Type :- </b> ".$record1['package_type']."<br>";
                                            echo "<b>Pick Up Location :- </b>".$record1['pick_up_location']."<br>";
                                            echo "<b>Drop Location :- </b> ".$record1['drop_location']."<br>";
                                            echo "<b>Vechicle Type:-</b> ".$record1['vechicle_type']."<br>";
                                            echo "<b>Amount :- </b>LKR " . $record1['amount'] . ".00"."<br>";
                                            echo "<b>Payment Method :- </b>".$record1['payment_method']."<br>";
                                            echo "<b>Driver :- </b>".$record1['driver']."<br>";
                                            echo "<b>RO :- </b>".$record1['ro']."<br>";
                                            echo "<b>Remark :- </b>". $record1['remark'];
                                            
                                            echo"</tr>";
                                            
                                              }
                                           ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                            
                                         $i++;   
                                        }
                                    }

                                      ?>
                                                
                                            
                                  
                                        <?php
                                    echo "</ul>";
                                    echo '<a class="btn btn-lg btn-success btn-block tp" href="view.php" style="margin-left: 740px; bottom: 7px; position: relative;" onclick="history.back();">Back</a>';
                                     
                                            
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

<script>
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<script>
    $(function () {
        $("#datepicker1").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/timepicki.css" rel="stylesheet">


<!-- jQuery libs -->

<script type="text/javascript">
    function myJSFunction(element) {
        var color = ['none', '#4dff4d', '#FFFFFF', '#FF0000'];
        $('select').change(function () {
            $(this).parents('tr').css('background', color[$(':selected', this).index()]);
        })

        //document.getElementById('form').submit();
    }
</script>



    </body>
</html>


