
<?php

$con = mysqli_connect("localhost", "root", "123", "alt");
if (mysqli_errno($con)) {
    die("can not connect:" . mysqli_error());
}




$id = $_POST['id'];
//var_dump($_POST);
//die();
//echo $id;
$result = mysqli_query($con, "SELECT t.amount, t.date, t.passenger, t.client_id, c.client FROM tour t JOIN client c on c.id = t.client_id WHERE t.id='{$id}'");
$record = mysqli_fetch_assoc($result);
$a = $record['passenger'];
$b = $record['client'];
$c = $record['amount'];
$d = $record['date'];
$f = $a . "_" . $b . "_" . $c . "_" . $d;
echo json_encode($f);



//echo $result;
  //echo $a; 