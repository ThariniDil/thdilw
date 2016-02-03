<?php
include './config.php';
?>



<?php
//$date = 0;

if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];



//selecting data associated with this particular id
    $result = mysqli_query($con, "SELECT r.id, r.booking_id, r.invoice_id, r.tour_date, r.invoice_no, r.ticket_no, r.client_name, r.passenger_name, r.amount, r.due_date, r.payment_recieve_date, r.paid_by, r.cheque_no, r.payment_status, r.remark FROM creditor r WHERE r.id=$id");

    while ($record = mysqli_fetch_array($result)) {
        $id = $record['id'];
        $bookingid = $record['booking_id'];
        $invoiceid = $record['invoice_id'];
        $tourdate = $record['tour_date'];
        $invoiceno = $record['invoice_no'];
        $ticketno = $record['ticket_no'];
        $client = $record['client_name'];
        $passenger = $record['passenger_name'];
        $amount = $record['amount'];
        $duedate = $record['due_date'];
        $paymentreceivedate = $record['payment_recieve_date'];
        $paidby = $record['paid_by'];
        $chequeno = $record['cheque_no'];
        $paymentstatus = $record['payment_status'];
        $remark = $record['remark'];
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
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
        //updating the table
        mysqli_query($con, "UPDATE creditor r SET r.id='$id',r.booking_id='$bookingid',r.invoice_id='$invoiceid',r.tour_date='$tourdate',r.invoice_no='$invoiceno',r.ticket_no='$ticketno',r.client_name='$client',r.passenger_name='$passenger',r.amount='$amount',r.due_date='$duedate',r.payment_recieve_date='$paymentreceivedate',r.paid_by='$paidby',r.cheque_no='$chequeno',r.payment_status='$paymentstatus',r.remark='$remark' WHERE r.id='$id'");  //redirectig to the display page. In our case, it is view.php
        header("Location: creport.php");
    }
}
?>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap.css"/>

<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<script>
    $(function () {
        $("#datepicker1").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<script>
    $(function () {
        $("#datepicker2").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/timepicki.css" rel="stylesheet">

<script src="js/timepicki.js"></script>
<script>
       $(document).ready(function () {
           $(".time_element").timepicki();
       });
</script>


<style type="text/css">

     body{
        background-color: grey;
         background: url('im/dil.jpg') no-repeat center center fixed;

                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                height: 50%;
    }

 
    
    .container {

        width: 870px;
        margin-left: 52px;

    }
    .panel-body {

        height: 613px;
    }


    .style-3 input[type="text"] {
        padding: 10px;
        border: solid 1px #dcdcdc;
        transition: box-shadow 0.3s, border 0.3s;
        border-radius:5px;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
    }
    .style-3 input[type="text"]:focus,
    .style-3 input[type="text"].focus {
        border: solid 1px #707070;
        box-shadow: 0 0 5px 1px #969696;
    }


    .style-4 input[type="email"] {
        padding: 10px;
        border: solid 5px #c9c9c9;
        box-shadow: inset 0 0 0 1px #707070;
        transition: box-shadow 0.3s, border 0.3s;
        border-radius:5px;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
    }
    .style-4 input[type="email"]:focus,
    .style-4 input[type="email"].focus {
        border: solid 5px #969696;
    }

    .style-5 input[type="telephone"] {
        padding: 10px;
        border: solid 5px #c9c9c9;
        box-shadow: inset 0 0 0 1px #707070;
        transition: box-shadow 0.3s, border 0.3s;
        border-radius:5px;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
    }
    .style-5 input[type="telephone"]:focus,
    .style-5 input[type="telephone"].focus {
        border: solid 5px #969696;
    }
    .turnintodropdown {
        border: o;
        box-shadow: 0 1px 0 rgba(0,0,0,0.2);
        cursor: pointer;
        outline: none;
        position: relative;
        border-radius: 5px;
        padding: 12px 15px;
        background: #fff;
    }
    div {
        margin: 0 0 0.75em 0;
    }

    input[type="radio"] {
        display: none;
    }

    input[type="radio"] + label {
        color: #292321;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    input[type="radio"] + label span {
        display: inline-block;
        width: 19px;
        height: 19px;
        margin: -1px 4px 0 0;
        vertical-align: middle;
        cursor: pointer;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }

    input[type="radio"] + label span {
        background-color: #292321;
    }

    input[type="radio"]:checked + label span {
        background-color: #5cb85c;
    }

    input[type="radio"] + label span,
    input[type="radio"]:checked + label span {
        -webkit-transition: background-color 0.4s linear;
        -o-transition: background-color 0.4s linear;
        -moz-transition: background-color 0.4s linear;
        transition: background-color 0.4s linear;
    }

    textarea {
        color:#666;
        font-size:14px;
        -moz-border-radius: 8px; -webkit-border-radius: 8px;
        margin:5px 0px 10px 0px;
        padding:10px;
        height:75px;
        width:290px;
        border:#999 1px solid;
        font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
        transition: all 0.25s ease-in-out;
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        box-shadow: 0 0 5px rgba(81, 203, 238, 0);
        -webkit-box-shadow: 0 0 5px rgba(81, 203, 238, 0);
        -moz-box-shadow: 0 0 5px rgba(81, 203, 238, 0);
    }


    textarea:focus{
        color:#000;
        outline:none;
        border:#35a5e5 1px solid;
        font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        -webkit-box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        -moz-box-shadow: 0 0 5px rgba(81, 203, 238, 1);
    }

</style>

<script>
    function getToursInfo() {
        var e = document.getElementById("bookingid");
        var id = e.options[e.selectedIndex].value;
        //alert(id);
        if (id > 0) {

            $.ajax({
                url: "test.php",
                type: "POST",
                dataType: 'json', // add json datatype to get json
                data: ({id: id}),
                //data1: ({passenger: passenger}),
                success: function (response) {
                    //console.log(data);
                    // you will get response from your php page (what you echo or print)                 
                    //alert(response);
                    var x = response;
                    var y = x.split("_");
                    $('#passenger').val(y[0]);
                    $('#client').val(y[1]);
                    $('#amount').val(y[2]);
                    $('#datepicker').val(y[3]);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }

            });
        }
    }
</script>



<body>

    <a href="creport.php">Home</a>
    <br/><br/>

    <div class="container">

        <div class="col-md-4 col-md-offset-4">
            <div class="row vertical-offset" style="width: 235%;">

                <div class="panel panel-default" >
                    <div class="panel-heading">
                      
                        <h3 class="panel-title"><b>CREDITORS EDIT FORM</b></h3>
                    </div>
                    <div class="panel-body">
                        <form id="form" action="#" method="post">


                            <div class="form-group style-3 " style=" bottom: 13px; position: relative;">
                                ID: <br /><input type="text" name="id" style="height: 30px;" value="<?php echo $id; ?>" />
                            </div> 



                            <div class="form-group style-3 " style=" bottom: 23px; position: relative;">
                                <label>Booking ID:</label><br />

                                <select onchange="getToursInfo();" id="bookingid" class="turnintodropdown" name="bookingid" style="height: 40px; width: 195px; ">
                                    <option value="<?php echo $bookingid; ?>">-Select Booking ID-</option>
<?php
//$sql = "SELECT * FROM passenger";
$result = mysqli_query($con, "SELECT * FROM tour");

while ($row = mysqli_fetch_array($result)) {
    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></option>
    <?php
}
?>
                                </select>
                            </div>





                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 264px; bottom: 100px; position: relative; ">
                                Invoice_Id: <br /> <input type="text" name="invoiceid" style="height: 30px;" value="<?php echo $invoiceid; ?>"/>
                            </div>
                            <div class="form-group style-3" style="  bottom: 80px; position: relative; ">
                                Tour Date : <br /> <input type="text" id="datepicker" name="tourdate" style="height: 30px;" value="<?php echo $tourdate; ?>"/>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 264px; bottom: 148px ; position: relative;">
                                Invoice No: <br /> <input type="text" name="invoiceno" style="height: 30px;" value="<?php echo $invoiceno; ?>"/>
                            </div>
                            <div class="form-group style-3 " style="bottom: 140px; position: relative;">
                                Ticket No: <br /> <input type="text" name="ticketno" style="height: 30px;" value="<?php echo $ticketno; ?>"/>
                            </div>
                            <div class="form-group style-3 " style="bottom: 84px; position: relative;">
                                Passenger: <br /> <input type="text" id="passenger" name="passenger" style="height: 30px;" value="<?php echo $passenger; ?>"/>
                            </div>
                            <div class="form-group style-3 " style="margin-left: 264px; bottom: 271px; position: relative;">
                                Client Name: <br /> <input type="text" id="client" name="client" style="height: 30px;" value="<?php echo $client; ?>"/>
                            </div>

                            <div class="form-group style-3 " style="bottom: 155px; position: relative;" >

                                Amount:<br />

                                <span class="symbol">LKR</span>

                                <input name="amount" id="amount" type="text" style="height: 30px;" value="<?php echo $amount; ?>"/> .		



                            </div>
                            <div class="form-group style-3 " style="bottom: 340px; position: relative;">
                                Due Date: <br /> <input type="text" id="datepicker1" name="duedate" style="height: 30px;" value="<?php echo $duedate; ?>"/>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 264px; bottom: 406px; position: relative;">
                                Payment Receive Date : <br /> <input type="text" id="datepicker2" name="paymentreceivedate" style="height: 30px;" value="<?php echo $paymentreceivedate; ?>"/>
                            </div>

                            <div class="form-group style-3 " style="bottom: 280px; position: relative;">
                                Paid By: <br /> <input type="text" name="paidby" style="height: 30px;" value="<?php echo $paidby; ?>" />
                            </div>	
                            <div class="form-group style-3 " style="bottom: 285px; position: relative;">
                                Cheque No: <br /> <input type="text" name="chequeno" style="height: 30px;" value="<?php echo $chequeno; ?>"/>
                            </div>
                            <div class="form-group style-3 " style="bottom: 529px; margin-left: 264px; position: relative;">
                                Payment Status: <br /> <input type="text" name="paymentstatus" style="height: 30px;" value="<?php echo $paymentstatus; ?>"/>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 264px; bottom: 484px; position: relative;">
                                Remark: <br /><textarea id="txt" name="remark" cols="35" style="height: 80px;" rows="10" required><?php print $remark; ?></textarea>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" name="update" type="submit" value="update" style="width: 100px; margin-left: 459px; bottom: 465px; position: relative;">






                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>






