<?php
include './config.php';

if (isset($_POST['submit'])) {
    $vechicle = $_POST['vechicle'];
    $duration = $_POST['duration'];
    $mileage = $_POST['mileage'];
    $price = $_POST['price'];
    $hour = $_POST['hour'];
    $km = $_POST['km'];
    $limit = $_POST['limit'];

//var_dump($_POST);
//die();            
    // $sql = ;

    mysqli_query($con, "INSERT INTO `packagetype`(`vechicle_id`, `duration`, `mileadge`, `price`, `additional_hour`, `rate_per_km`, `usage_limit`) VALUES ('{$vechicle}','{$duration}','{$mileage}','{$price}','{$hour}','{$km}','{$limit}')");
}

header("Location: packagetype.php");

?>