<?php

include './config.php';
?>



<?php
if (isset($_POST['submit'])) {
    $clientname = $_POST['clientname'];
    $passengername = $_POST['passengername'];
    $transfertype = $_POST['transfertype'];
    $pickuplocation = $_POST['pickuplocation'];
    $droplocation = $_POST['droplocation'];
    $noofpax = $_POST['noofpax'];
    $date = $_POST['date'];
    $requesttime = $_POST['timepicker11'];
    $flightno = $_POST['flightno'];
    $flighttime = $_POST['timepicker12'];
    $vechicle = $_POST['vechicle'];
    $ro = $_POST['ro'];
    $driver = $_POST['driver'];
    $paymentmethod = $_POST['paymentmethod'];
    $amount = $_POST['amount'];
    $remark = $_POST['remark'];
//var_dump($_POST);
//die();            

    mysqli_query($con, "INSERT INTO `tour`(`passenger`, `client_id`, `transfer_type`, `date`, `request_time`, `no_of_pax`, `flight_no`, `flight_time`, `pick_up_location`, `drop_location`, `amount`, `payment_method`, `vechicle_id`, `driver`, `ro`, `remark`) VALUES ('{$passengername}','{$clientname}','{$transfertype}','{$date}','{$requesttime}','{$noofpax}','{$flightno}','{$flighttime}','{$pickuplocation}','{$droplocation}','{$amount}','{$paymentmethod}','{$vechicle}','{$driver}','{$ro}','{$remark}')");
}


  header("Location: pickup.php");
?>  
