<?php
// including the database connection file
include './config.php';
?>


<?php
//
// if(isset($_REQUEST['booking_id'])) {
//     
//     $id=$_REQUEST['booking_id'];
//     
//     
// 
////selecting data associated with this particular id
//$result = mysqli_query($con, "SELECT booking_id, client_name FROM creditors WHERE booking_id=$id"); 
//
//
//
//while($record = mysqli_fetch_array($result))
//{
//                $id = $record['booking_id'];    
//	        $client = $record['client_name'];
//              
//   }
//          
//if(isset($_POST['update']))
//{	
//        $id = $_POST['id'];
//	$client = $_POST['client'];
//	
//           
//           
//     
//
////var_dump($_POST);
////die(); 
//        
//	
//		
//		//updating the table
//		mysqli_query($con, "UPDATE `creditors` SET booking_id='$id',client_name='$client' WHERE booking_id='$id'");
//		
//		//redirectig to the display page. In our case, it is picktable.php
//		header("Location: view.php");
//	}
//
//
// }
//   
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
            //dateFormat: "yy-mm-dd"
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
<script>
    $(function () {
        $("#datepicker3").datepicker({
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
    }

    .panel-default > .panel-heading {
        background-color: #5cb85c
    }
    .container {

        width: 1550px;
        margin-left: -376px;

    }
    .panel-body {

        height: 1190px;
    }
    <!--
    a:link {color: #000000; text-decoration: underline; }
    a:active {color: #0000ff; text-decoration: underline; }
    a:visited {color: #008000; text-decoration: underline; }
    a:hover {color: #ff0000; text-decoration: none; }

    -->

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
        var e = document.getElementById("client");
        var id = e.options[e.selectedIndex].value;
        //alert(id);
        if (client > 0) {

            $.ajax({
                url: "test1.php",
                type: "POST",
                dataType: 'json', // add json datatype to get json
                data: ({client: client}),
                //data1: ({passenger: passenger}),
                success: function (response) {
                    //console.log(data);
                    // you will get response from your php page (what you echo or print)                 
                    //alert(response);
                    var x = response;
                    var y = x.split("_");
                    $('#address').val(y[0]);

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
            <div class="row vertical-offset" style="width: 200%;">

                <div class="panel panel-default" >
                    <div class="panel-heading">
                        <h2 class="panel-center-heading">Airport Travels</h2>
                        <h3 class="panel-title"><b>INVOICE</b></h3>
                    </div>
                    <div class="panel-body">
                        <form id="form">
                            <div id="mydiv" class="form-group style-3 " style="bottom: 20px; position: relative;">
                              
                                <table cellpadding="0" cellspacing="0" border="2" id="table" class="table table-striped table-hover" style="white-space: nowrap; width: 50px;">




                                    <tbody>


                                        <tr>

                                            <th id="total" colspan="3">Client Name :</th>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="name" name="name" /></div></td>
                                        </tr>
                                        <tr>
                                            <th id="total" colspan="3">Bill To :</th>
                                            <td><div class="form-group style-3 " contenteditable style="height: 60px; width: 200px; text-align: center; "><input type="text" id="billto" name="billto" /></div></td>
                                        </tr>                                                        

                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group style-3" style=" margin-bottom: 4px; margin-left: 450px;  bottom: 190px; position: relative; ">
                                <table cellpadding="0" cellspacing="0" border="0" id="table" class="table table-striped table-hover" style="white-space: nowrap; width: 50px;">




                                    <tbody>


                                        <tr>

                                            <th colspan="3">Tour Date :</th>
                                            <td><div  class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" name="tourdate" id="datepicker" /></div></td>
                                        </tr>
                                        <tr>
                                            <th id="total" colspan="3">Invoice Number :</th>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="invoiceno" name="invoiceno" /></div></td>
                                        </tr>                                                        

                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group style-3 " style="bottom: 144px ; position: relative;">
                                <table cellpadding="0" cellspacing="0" border="2" id="table" class="table table-striped table-hover" style="white-space: nowrap;">
                                    <thead>
                                        <tr>
                                            <th style="font-weight: bold; width: 1%;">Date:</th>
                                            <th style="font-weight: bold; width: 1%;">Ticket No:</th>
                                            <th style="font-weight: bold; width: 1%;">Description:</th>
                                            <th style="font-weight: bold; width: 1%;">Total Amount LKR:</th>


                                        </tr>
                                    </thead>



                                    <tbody>


                                    <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" name="date" id="datepicker3" /></div></td>
                                    <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="ticketno" name="ticketno" /></div></td>

                                    <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="description" name="description" /></div></td>
                                    <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="amount" name="amount" /></div></td>

                                    </tbody>












                                    <tfoot>
                                        <tr>
                                            <th id="total" colspan="2">Transfer Type :</th>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="type1" name="type1" /></div></td>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="type2" name="type2" /></div></td>
                                        </tr>
                                        <tr>
                                            <th id="total" colspan="2">Charges :</th>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="charge1" name="charge1" /></div></td>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="charge2" name="charge2" /></div></td>

                                        </tr>
                                        <tr>
                                            <th id="total" colspan="3">Total :</th>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="total" name="total" /></div></td>
                                        </tr>

                                    </tfoot>                                     
                                </table>
                            </div>


                            <div class="form-group style-3 " style="bottom: 140px; position: relative;">
                                <table cellpadding="0" cellspacing="0" border="0" id="table" class="table table-striped table-hover" style="white-space: nowrap; width: 50px;">




                                    <tbody>


                                        <tr>

                                            <th colspan="3">Payment Status :</th>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="status" name="status" /></div></td>
                                        </tr>


                                    </tbody>
                                </table></div>
                            <div class="form-group style-3 " style="bottom: 140px; position: relative;">
                                <table cellpadding="0" cellspacing="0" border="2" id="table" class="table table-striped table-hover" style="white-space: nowrap; width: 150px;">




                                    <tbody>


                                        <tr>

                                            <th colspan="3">Account Name :</th>
                                            <td><div class="form-group style-3 " contenteditable style=" width: 300px; text-align: center;"><input type="text" id="accname" name="accname" /></div></td>
                                        </tr>
                                        <tr>
                                            <th id="total" colspan="3">Account Number:</th>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="accno" name="accno" /></div></td>
                                        </tr>    
                                        <tr>

                                            <th colspan="3">Bank :</th>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="bank" name="bank" /></div></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group style-3 " style="bottom: 75px; position: relative;">
                                <table cellpadding="0" cellspacing="0" border="0" id="table" class="table table-striped table-hover" style="white-space: nowrap; width: 50px;">




                                    <tbody>


                                        <tr>

                                            <th colspan="3">Due Date:</th>
                                            <td><div class="form-group style-3 " contenteditable style="text-align: center;"><input type="text" id="datepicker2" name="duedate" /></div></td>
                                        </tr>


                                    </tbody>
                                </table></div>
                            <div class="form-group style-3 " style="margin-left: 550px; bottom: 195px; position: relative;">
                                <table cellpadding="0" cellspacing="0" border="0" id="table" class="table table-striped table-hover" style="white-space: nowrap; width: 50px;">


                                    <thead>
                                    <td style="bottom: 200px;"><div class="form-group style-3 " style="text-align: center;"><input type="text" id="sig" name="sig" /></div></td>


                                    </thead>

                                    <tbody>


                                        <tr>

                                            <th colspan="3">Authorized Signature:</th>
                                        </tr>


                                    </tbody>
                                    
                                   
                                        

                                        
                                   
                                </table>
                                <div id="print-content" style="margin-left: 92px; width: 162px; position: relative; bottom: 5px; ">
                                
                              <input id="btn_submit" class="btn btn-lg btn-success btn-block submit" 
                                     type="button" name="submit" value="Print this page">
                            </div>
                            </div>
                             
                            
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <script>
       $(document).ready(function() {
    $("#btn_submit").click(function() {
        var name = $("#name").val();
        
// Returns successful data submission message when the entered information is stored in database.
            $.post("transportation_submit.php", {
                form_id1: form_id,
                //form_id1: form_id,
                servlink_id1: servlink_id,
                arr_vessel1: arr_vessel,
                arr_service1: arr_service,
                inqid1:inqid,
                newdropid1:dropid,
                startPort1:startPort,
                endPort1:endPort
            }, function(data) {
                  alert(data);
                // $('#form')[0].reset(); // To reset form fields
            });
    });
});
        </script>