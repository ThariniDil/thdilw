<?php
// including the database connection file
include './config.php';
?>



<?php
//$date = 0;

if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];



//selecting data associated with this particular id
    $result = mysqli_query($con, "SELECT t.id, t.date, t.transfer_type, t.request_time, t.no_of_pax, t.no_of_days, t.flight_time, t.flight_no, t.package_rate, t.package_type, t.start_date, t.end_date, t.pick_up_location, t.drop_location, t.vechicle_id, t.amount, t.payment_method, t.driver, t.ro, t.remark, t.passenger, t.client_id, t.vechicle_id , c.client, v.vechicle_type FROM tour t JOIN client c on c.id = t.client_id JOIN vechicle v on v.id = t.vechicle_id WHERE t.id=$id");


    while ($record = mysqli_fetch_array($result)) {
        $id = $record['id'];
        $date = $record['date'];
        $transfertype = $record['transfer_type'];
        $requesttime = $record['request_time'];
        $noofpax = $record['no_of_pax'];
        $noofdays = $record['no_of_days'];
        $flighttime = $record['flight_time'];
        $flightno = $record['flight_no'];
        $pickuplocation = $record['pick_up_location'];
        $droplocation = $record['drop_location'];
        $packagerate = $record['package_rate'];
        $packagetype = $record['package_type'];
        $enddate = $record['end_date'];
        $startdate = $record['start_date'];
        $vechicle = $record['vechicle_id'];
        $amount = $record['amount'];
        $paymentmethod = $record['payment_method'];
        $driver = $record['driver'];
        $ro = $record['ro'];
        $remark = $record['remark'];
        $passengername = $record['passenger'];
        $clientname = $record['client_id'];
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];

        $clientname = $_POST['clientname'];
        $passengername = $_POST['passengername'];
        $pickuplocation = $_POST['pickuplocation'];
        $droplocation = $_POST['droplocation'];
        $transfertype = $_POST['transfertype'];
        $noofpax = $_POST['noofpax'];
        $noofdays = $_POST['noofdays'];
        $date = $_POST['date'];
        $requesttime = $_POST['timepicker11'];
        $flightno = $_POST['flightno'];
        $flighttime = $_POST['timepicker12'];
        $packagerate = $_POST['packagerate'];
        $packagetype = $_POST['packagetype'];
        $enddate = $_POST['enddate'];
        $startdate = $_POST['startdate'];
        $vechicle = $_POST['vechicle'];
        $driver = $_POST['driver'];
        $ro = $_POST['ro'];
        $paymentmethod = $_POST['paymentmethod'];
        $amount = $_POST['amount'];
        $remark = $_POST['remark'];

//var_dump($_POST);
//die(); 
        //updating the table
        mysqli_query($con, "UPDATE tour t JOIN client c ON c.id = t.client_id JOIN vechicle v ON v.id = t.vechicle_id SET t.id='$id',t.passenger='$passengername',t.date='$date',t.transfer_type='$transfertype',t.client_id='$clientname',t.vechicle_id='$vechicle',t.pick_up_location='$pickuplocation',t.drop_location='$droplocation',t.no_of_pax='$noofpax',t.no_of_days='$noofdays',t.request_time='$requesttime',t.driver='$driver',t.flight_no='$flightno',t.flight_time='$flighttime',t.package_rate='$packagerate',t.package_type='$packagetype',t.start_date='$startdate',t.end_date='$enddate',t.ro='$ro',t.payment_method='$paymentmethod',t.amount='$amount',t.remark='$remark' WHERE t.id='$id'");
        //redirectig to the display page. In our case, it is view.php
        header("Location: viewdate.php");
    }
}
?>




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
<script>
    $(function () {
        $("#datepicker1").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<script>
    $(function () {
        $("#datepicker2").datepicker({
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
<script>
    $(document).ready(function () {
        $('#timepicker12').timepicki({
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

<style type="text/css">

 
    
     body{
        background-color: grey;
         background: url('im/dil.jpg') no-repeat center center fixed;

                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                height: 50%;
    }

    .container {

        width: 951px;
        margin-left: -49px;

    }
    .panel-body {

        height: 909px;
    }
  

    .style-3 input[type="text"] {
        padding: 10px;
        border: solid 1px #dcdcdc;
        transition: box-shadow 0.3s, border 0.3s;
        border-radius:5px;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
    }
    .style-3 input[type="text"]:focus,
    .style-3 input[type="text"].focus {
        border: solid 1px #707070;
        box-shadow: 0 0 5px 1px #969696;
    }


    .style-4 input[type="email"] {
        padding: 10px;
        border: solid 5px #c9c9c9;
        box-shadow: inset 0 0 0 1px #707070;
        transition: box-shadow 0.3s, border 0.3s;
        border-radius:5px;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
    }
    .style-4 input[type="email"]:focus,
    .style-4 input[type="email"].focus {
        border: solid 5px #969696;
    }

    .style-5 input[type="telephone"] {
        padding: 10px;
        border: solid 5px #c9c9c9;
        box-shadow: inset 0 0 0 1px #707070;
        transition: box-shadow 0.3s, border 0.3s;
        border-radius:5px;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
    }
    .style-5 input[type="telephone"]:focus,
    .style-5 input[type="telephone"].focus {
        border: solid 5px #969696;
    }
    .turnintodropdown {
        border: o;
        box-shadow: 0 1px 0 rgba(0,0,0,0.2);
        cursor: pointer;
        outline: none;
        position: relative;
        border-radius: 5px;
        padding: 7px 41px;
        background: #fff;
    }
    div {
        margin: 0 0 0.75em 0;
    }

    input[type="radio"] {
        display: none;
    }

    input[type="radio"] + label {
        color: #292321;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    input[type="radio"] + label span {
        display: inline-block;
        width: 19px;
        height: 19px;
        margin: -1px 4px 0 0;
        vertical-align: middle;
        cursor: pointer;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }

    input[type="radio"] + label span {
        background-color: #292321;
    }

    input[type="radio"]:checked + label span {
        background-color: #5cb85c;
    }

    input[type="radio"] + label span,
    input[type="radio"]:checked + label span {
        -webkit-transition: background-color 0.4s linear;
        -o-transition: background-color 0.4s linear;
        -moz-transition: background-color 0.4s linear;
        transition: background-color 0.4s linear;
    }

    textarea {
        color:#666;
        font-size:14px;
        -moz-border-radius: 8px; -webkit-border-radius: 8px;
        margin:5px 0px 10px 0px;
        padding:10px;
        height:75px;
        width:290px;
        border:#999 1px solid;
        font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
        transition: all 0.25s ease-in-out;
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        box-shadow: 0 0 5px rgba(81, 203, 238, 0);
        -webkit-box-shadow: 0 0 5px rgba(81, 203, 238, 0);
        -moz-box-shadow: 0 0 5px rgba(81, 203, 238, 0);
    }


    textarea:focus{
        color:#000;
        outline:none;
        border:#35a5e5 1px solid;
        font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        -webkit-box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        -moz-box-shadow: 0 0 5px rgba(81, 203, 238, 1);
    }

</style>

<body>
    <a href="viewdate.php">Home</a>
    <br/><br/>


    <div class="container">

        <div class="col-md-4 col-md-offset-4">
            <div class="row vertical-offset" style="width: 240%;">

                <div class="panel panel-default" >
                    <div class="panel-heading">
                      
                        <h3 class="panel-title"><b> TRAVEL EDIT FORM</b></h3>
                    </div>
                    <div class="panel-body">
                        <form id="form" action="#" method="post">
                            <div class="form-group style-3 " style=" bottom: 13px; position: relative;">
                                ID: <br /><input type="text" name="id" style="height: 30px;" value="<?php echo $id; ?>" />
                            </div> 

                            <div class="form-group style-3 " style=" bottom: 23px; position: relative;">
                                <label>Client:</label><br />

                                <select class="turnintodropdown" name="clientname" style="height: 40px; width: 195px;" >
                                    <option value="<?php echo $clientname; ?>">-Select Client-</option>
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
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 344px; bottom: 103px; position: relative; ">
                                <label>Passenger:</label><br />
                                <input type="text" name="passengername" style="height: 30px;" value="<?php echo $passengername; ?>"/>
                            </div>
                            <div class="form-group style-3 " style=" bottom: 226px; position: relative; margin-left: 344px; ">
                                <label>Transfer Type:</label><br />
                                <select class="turnintodropdown" name="transfertype" >
                                    <option value="<?php echo $transfertype; ?>"></option>
                                    <option value="<?php echo "Drop"; ?>">Drop</option>
                                    <option value="<?php echo "Pickup"; ?>">Pickup</option>
                                    <option value="<?php echo "Day_Running"; ?>">Day_Running</option>
                                    <option value="<?php echo "Round_Day"; ?>">Round_Day</option>
                                </select>
                            </div> 
                            <div class="form-group style-3" style="  bottom: 159px; position: relative; ">
                                Date : <br /> <input type="text" id="datepicker2" name="date" style="height: 30px;"  value="<?php echo $date; ?>" />
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 344px; bottom: 227px ; position: relative;">
                                Request Time: <br /> <input class="time_element" id="timepicker11" name="timepicker11" type="text" style="height: 30px;" value="<?php echo $requesttime; ?>" />
                            </div>
                            <div class="form-group style-3 " style="bottom: 220px; position: relative;">
                                No of Pax: <br /> <input type="text" name="noofpax" style="height: 30px;"  value="<?php echo $noofpax; ?>" />
                            </div>
                            <div class="form-group style-3 " style="margin-left: 344px; bottom: 287px; position: relative;">
                                No of Days: <br /> <input type="text" name="noofdays" style="height: 30px;" value="<?php echo $noofdays; ?>" />
                            </div>
                            <div class="form-group style-3 " style="bottom: 283px; position: relative;">
                                Flight Time: <br /> <input class="time_element" id="timepicker12" name="timepicker12" type="text" style="height: 30px;" value="<?php echo $flighttime; ?>" />
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 344px; bottom: 350px; position: relative;">
                                Flight No: <br /> <input type="text" name="flightno" style="height: 30px;"  value="<?php echo $flightno; ?>" />
                            </div>
                            <div class="form-group style-3 " style="bottom: 334px; position: relative;">
                                Package Type:<br /><select class="turnintodropdown" name="packagetype" style="height: 40px; width: 195px;">

                                    <option value="<?php echo "England"; ?>">England</option>
                                    <option value="<?php echo "Northern_Ireland"; ?>">Northern Ireland</option>
                                    <option value="<?php echo "Scotland"; ?>">Scotland</option>
                                    <option value="<?php echo "Wales"; ?>">Wales</option>
                                </select>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 344px; bottom: 409px; position: relative;">
                                Package Rate: <br /> <input type="text" name="packagerate" style="height: 30px;" value="<?php echo $packagerate; ?>"  />
                            </div>
                            <div class="form-group style-3 " style="bottom: 381px; position: relative;">
                                Start Date: <br /> <input type="text" id="datepicker1" name="startdate" style="height: 30px;" value="<?php echo $startdate; ?>"  />
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 344px; bottom: 449px; position: relative;">
                                End Date: <br /> <input type="text" id="datepicker" name="enddate" style="height: 30px;" value="<?php echo $enddate; ?>"  />
                            </div>
                            <div class="form-group style-3 " style="bottom: 430px; position: relative;">
                                Pick up Location: <br /><textarea id="txt" name="pickuplocation" cols="35" style="height: 80px;" rows="10" ><?php print $pickuplocation; ?></textarea>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 344px; bottom: 562px; position: relative;">
                                Drop Location: <br /><textarea id="txt" name="droplocation" cols="35" style="height: 80px;" rows="10" ><?php print $droplocation; ?></textarea>
                            </div>



                            <div class="form-group style-3 " style=" margin-left: 344px; bottom: 386px; position: relative;">	

                                R/O: <br /><input type="text" name="ro" value="<?php echo $ro; ?>"  />



                            </div>
                            <div class="form-group style-3 " style="bottom: 626px; position: relative;" >

                                Amount:<br />

                                <span class="symbol">LKR</span>

                                <input name="amount" type="text" style="height: 30px;"  value="<?php echo $amount; ?>" /> .		



                            </div>
                            <div class="form group" style="bottom: 612px; position: relative;">
                                Payment Method:
                         <div style="position: relative; bottom: -10px;">
                                    <input type="radio" id="radio01" name="paymentmethod" value="Cash" required/>
                                    <label for="radio01"><span></span>Cash</label>
                                </div>

                                <div style="margin-left: 71px; position: relative; bottom: 26px;">
                                    <input type="radio" id="radio02" name="paymentmethod" value="Credits" required/>
                                    <label for="radio02"><span></span>Credits</label>
                                </div>

                                <div style="margin-left: 158px; position: relative; bottom: 63px;">
                                    <input type="radio" id="radio03" name="paymentmethod" value="C/c" required/>
                                    <label for="radio03"><span></span>C/c</label>
                                </div>
                            </div>

                            <div class="form-group style-3 " style="bottom:826px; position: relative; margin-left: 344px;">	

                                <label>Vechicle Type</label><br />

                                <select class="turnintodropdown" name="vechicle" style="height: 40px; width: 195px; " >
                                    <option value="<?php echo $vechicle; ?>" >-Select Vechicle Type-</option>
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
                            <div class="form-group style-3 " style="bottom:822px; position: relative; margin-left: 344px;">	

                                Driver: <br/> <input type="text" name="driver" value="<?php echo $driver; ?>"  />



                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 6px; bottom: 814px; position: relative;">
                                Remark: <br /><textarea id="txt" name="remark" cols="35" style="height: 80px;" rows="10" ><?php print $remark; ?></textarea>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" name="update" type="submit" value="update" style="width: 100px; margin-left: 432px; bottom: 849px; position: relative;">





                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body> 