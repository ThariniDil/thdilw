<?php

include './config.php';

if (isset($_POST['submit'])) {
    $clientname = $_POST['clientname'];
    $passengername = $_POST['passengername'];
    $transfertype = $_POST['transfertype'];
    $pickuplocation = $_POST['pickuplocation'];
    $droplocation = $_POST['droplocation'];
    $noofpax = $_POST['noofpax'];
    $date = $_POST['date'];
    $requesttime = $_POST['requesttime'];
    $enddate = $_POST['enddate'];
    $startdate = $_POST['startdate'];
    $vechicle = $_POST['vechicle'];
    $ro = $_POST['ro'];
    $driver = $_POST['driver'];
    $noofdays = $_POST['noofdays'];
    $paymentmethod = $_POST['paymentmethod'];
    $amount = $_POST['amount'];
    $remark = $_POST['remark'];
//var_dump($_POST);
//die();            
    // $sql = ;
    mysqli_query($con, "INSERT INTO `tour`(`passenger`, `client_id`, `transfer_type`, `date`, `request_time`, `no_of_pax`, `no_of_days`, `start_date`, `end_date`, `pick_up_location`, `drop_location`, `amount`, `payment_method`, `vechicle_id`, `driver`, `ro`, `remark`) VALUES ('{$passengername}','{$clientname}','{$transfertype}','{$date}','{$requesttime}','{$noofpax}','{$noofdays}','{$startdate}','{$enddate}','{$pickuplocation}','{$droplocation}','{$amount}','{$paymentmethod}','{$vechicle}','{$driver}','{$ro}','{$remark}')");
}

header("Location: round_day.php");

?>
