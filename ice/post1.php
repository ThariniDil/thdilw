
<?php


include './config.php';


if (isset($_POST['submit'])) {
    $clientname = $_POST['clientname'];
    $passengername = $_POST['passengername'];
    $pickuplocation = $_POST['pickuplocation'];
    $droplocation = $_POST['droplocation'];
    $transfertype = $_POST['transfertype'];
    $noofpax = $_POST['noofpax'];
    $noofdays = $_POST['noofdays'];
    $date = $_POST['date'];
    $requesttime = $_POST['requesttime'];
    $packagerate = $_POST['packagerate'];
    $packagetype = $_POST['packagetype'];
    $vechicle = $_POST['vechicle'];
    $driver = $_POST['driver'];
    $ro = $_POST['ro'];
    $paymentmethod = $_POST['paymentmethod'];
    $amount = $_POST['amount'];
    $remark = $_POST['remark'];
//var_dump($_POST);
//die();            
//           //$sql = ;
    mysqli_query($con, "INSERT INTO `tour`(`passenger`, `client_id`, `date`, `transfer_type`, `request_time`, `no_of_pax`, `no_of_days`, `package_rate`, `package_type`, `pick_up_location`, `drop_location`, `amount`, `payment_method`, `vechicle_id`, `driver`, `ro`, `remark`) VALUES ('{$passengername}','{$clientname}','{$date}','{$transfertype}','{$requesttime}','{$noofpax}','{$noofdays}','{$packagerate}','{$packagetype}','{$pickuplocation}','{$droplocation}','{$amount}','{$paymentmethod}','{$vechicle}','{$driver}','{$ro}','{$remark}')");
}


header("Location: day_running.php");

?>