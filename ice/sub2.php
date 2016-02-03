<?php 
include './config.php';



$id = $_POST['id'];
$name = $_POST['status'];

mysqli_query($con, "UPDATE `tour` SET `select_option`='{$name}' WHERE `id`='{$id}'");

header("Location: viewdate.php");
//
//var_dump($_POST);
//die();

