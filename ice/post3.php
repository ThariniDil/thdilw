<?php
include './config.php';


if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $contactperson = $_POST['contactperson'];
    $address = $_POST['address'];
    $remark = $_POST['remark'];
    $client = $_POST['client'];
    $billto = $_POST['billto'];
    $tel = $_POST['tel'];
    $office = $_POST['office'];
    $fax = $_POST['fax'];
//$ab = $_POST['text1'];
    // for ($i=0; $i <= count($ab); $i++ )
    //{
    //$ced = stripslashes($_POST['text1'][$i]);
//var_dump($_POST);
//die();            
    // $sql = ;
    mysqli_query($con, "INSERT INTO `client`(`client`, `bill_to`, `email`, `contact_person`, `address`, `remark`, `tel`, `office`, `fax`) VALUES ('{$client}','{$billto}','{$email}','{$contactperson}','{$address}','{$remark}','{$tel}','{$office}','{$fax}')");
    // }
}


    header("Location: client.php");
?>