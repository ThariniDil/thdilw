<?php
include './config.php';


if (isset($_POST['submit'])) {
    $bookingid = $_POST['bookingid'];
    $invoiceid = $_POST['invoiceid'];
    $tourdate = $_POST['tourdate'];
    $invoiceno = $_POST['invoiceno'];
    $ticketno = $_POST['ticketno'];
    $client = $_POST['client'];
    $passenger = $_POST['passenger'];
    $amount = $_POST['amount'];
    $duedate = $_POST['duedate'];
    $paymentreceivedate = $_POST['paymentreceivedate'];
    $paidby = $_POST['paidby'];
    $chequeno = $_POST['chequeno'];
    $paymentstatus = $_POST['paymentstatus'];
    $remark = $_POST['remark'];
//var_dump($_POST);
//die();            
    // $sql = ;
    mysqli_query($con, "INSERT INTO `creditor`(`booking_id`, `invoice_id`, `tour_date`, `invoice_no`, `ticket_no`, `client_name`, `passenger_name`, `amount`, `due_date`, `payment_recieve_date`, `paid_by`, `cheque_no`, `payment_status`, `remark`) VALUES  ('{$bookingid}','{$invoiceid}','{$tourdate}','{$invoiceno}','{$ticketno}','{$client}','{$passenger}','{$amount}','{$duedate}','{$paymentreceivedate}','{$paidby}','{$chequeno}','{$paymentstatus}','{$remark}')");
}



header("Location: creditors.php");

?>