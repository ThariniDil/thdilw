
<?php

$con = mysqli_connect("localhost", "root", "123", "alt");
if (mysqli_errno($con)) {
    die("can not connect:" . mysqli_error());
}




$client = $_POST['client'];
//var_dump($_POST);
//die();
//echo $id;
$result = mysqli_query($con, "SELECT c.address FROM client c WHERE client='{$client}'");
$record = mysqli_fetch_assoc($result);
$a = $record['address'];

$f = $a;
echo json_encode($f);



//echo $result;
  //echo $a; 

