<?php

include './config.php';

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $year = $_POST['year'];
    $vrn = $_POST['vrn'];
    $rln = $_POST['rln'];
    $in = $_POST['in'];
    $miledge = $_POST['miledge'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contactnumber = $_POST['contactnumber'];
    $email = $_POST['email'];
    $remark = $_POST['remark'];
//var_dump($_POST);
//die();            
    // $sql = ;

    mysqli_query($con, "INSERT INTO `vechicle`(`vechicle_type`, `brand`, `color`, `model`, `year`, `vrn`, `insurance_number`, `rln`, `name`, `miledge`, `number`, `address`, `email`, `remark`) VALUES ('{$type}','{$brand}','{$color}','{$model }','{$year}','{$vrn}','{$in}','{$rln}','{$name}','{$miledge}','{$contactnumber}','{$address}','{$email}','{$remark}')");
}


header("Location: vechicle.php");

?>