<?php
include './config.php';
?>





<?php
//$date = 0;

if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];



//selecting data associated with this particular id
    $result = mysqli_query($con, "SELECT c.id, c.client, c.bill_to, c.address, c.contact_person, c.email, c.tel, c.office, c.fax, c.remark FROM client c WHERE id=$id");


    while ($record = mysqli_fetch_array($result)) {
        $id = $record['id'];
        $client = $record['client'];
        $email = $record['email'];
        $address = $record['address'];
        $contactperson = $record['contact_person'];
        $billto = $record['bill_to'];
        $tel = $record['tel'];
        $office = $record['office'];
        $fax = $record['fax'];
        $remark = $record['remark'];
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $client = $_POST['client'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $contactperson = $_POST['contactperson'];
        $billto = $_POST['billto'];
        $tel = $_POST['tel'];
        $office = $_POST['office'];
        $fax = $_POST['fax'];
        $remark = $_POST['remark'];
//var_dump($_POST);
//die(); 
        //updating the table
        mysqli_query($con, "UPDATE `client` SET id='$id',client='$client',email='$email',contact_person='$contactperson',bill_to='$billto',address='$address',tel='$tel',office='$office',fax='$fax',remark='$remark' WHERE id='$id'");  //redirectig to the display page. In our case, it is view.php
        header("Location: clientdata.php");
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
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/timepicki.css" rel="stylesheet">

<script src="js/jquery.js"></script>
<script src="js/timepicki.js"></script>
<script>
      $(document).ready(function () {
          $(".time_element").timepicki();
      });
</script>
<script type="text/javascript">
    var counter = 1;
    var collector = "";

    function addfields(indx)
    {
        var tbl = document.getElementById('table_id');
        var newtr = document.createElement('tr');
        counter = counter + indx;

        newtr.setAttribute('id', 'tr' + counter);

        newtr.innerHTML = '<td><input type="checkbox" name="checkb' + counter + '" id="checkb' + counter + '" value="' + counter + '" onclick="checkme(' + counter + ')"></td><td><input type="text" name="text1[]"></td>';

        tbl.appendChild(newtr);
    }

    function checkme(dx)
    {
        collector += dx + ",";
    }

    function deletetherow(indx)
    {
        var col = collector.split(",");

        for (var i = 0; i < col.length; i++)
        {
            var remvelem = document.getElementById('tr' + col[i]);
            var chckbx = document.getElementById("checkb" + col[i]);
            if (remvelem && chckbx.checked)
            {
                var tbl = document.getElementById('table_id');
                tbl.removeChild(remvelem);
            }
        }
    }
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

        width: 850px;
        margin-left: 13px;

    }
    .panel-body {

        height: 521px;
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

    .style-5 input[type="tel"] {
        padding: 10px;
        border: solid 1px #dcdcdc;
        transition: box-shadow 0.3s, border 0.3s;
        border-radius:5px;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
    }
    .style-5 input[type="tel"]:focus,
    .style-5 input[type="tel"].focus {
        border: solid 1px #707070;
        box-shadow: 0 0 5px 1px #969696;
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





<body>

    <a href="clientdata.php">Home</a>
    <br/><br/>

    <div class="container">

        <div class="col-md-4 col-md-offset-4">
            <div class="row vertical-offset" style="width: 235%;">

                <div class="panel panel-default" >
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>CLIENT EDIT FORM</b></h3>
                    </div>
                    <div class="panel-body">
                        <form id="form" action="#" method="post">
<?php
//   <table id="table_id" >
//      <tr id="tr1" class="trmain">
//      <td>
//      </td>
//       <td>
//   
//        
//	 Client: <br /> <input type="text" name="text1[]" style="height: 30px;"/> 
//         
//             <input type="button" value="Add" onClick="addfields(1);" />&nbsp;
//             <input type="button" value="Delete" onClick="deletetherow()" />
//         
//            </tr>
//     </table>
?>
                            <div class="form-group style-3 " style=" bottom: 13px; position: relative;">
                                ID: <br /><input type="text" name="id" style="height: 30px;" value="<?php echo $id; ?>" />
                            </div> 
                            <div class="form-group style-3 " style=" bottom: 3px; position: relative;">

                                Client: <br /> <input type="text" name="client" style="height: 30px;" value="<?php echo $client; ?>"/> 
                            </div>
                            <div class="form-group style-4 " style="margin-bottom: 4px; margin-left: 244px; bottom: 71px ; position: relative;">
                                Email: <br /> <input type="email" name="email" style="height: 30px;" value="<?php echo $email; ?>"/>
                            </div>
                            <div class="form-group style-3 " style=" bottom: 50px; position: relative;">
                                Contact Person: <br /> <input type="text" name="contactperson" style="height: 30px;" value="<?php echo $contactperson; ?>"/>
                            </div>
                            <div class="form-group style-5 " style=" bottom: 40px; position: relative;">
                                Contact numbers: <br /> <br />
                                <label>Tel:</label>
                                <br /> <input type=tel size=15 name="tel" value="<?php echo $tel; ?>">
                                <br />
                                <label>Office:</label>
                                <br /> <input type=tel size=15 name="office" value="<?php echo $office; ?>">
                                <br />
                                <label>Fax:</label>
                                <br /> <input type=tel size=15 name="fax" value="<?php echo $fax; ?>">

                            </div>

                            <div class="form-group style-3 " style="margin-left: 244px; bottom: 379px; position: relative;">
                                Address: <br /><textarea id="txt" name="address" cols="10" style="height: 40px; width: 200px;" rows="10" required><?php print $address; ?></textarea>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 244px; bottom: 375px; position: relative;">
                                Bill To: <br /><textarea id="txt" name="billto" cols="35" style="height: 50px;" rows="10" required><?php print $billto; ?></textarea>
                            </div>
                            <div class="form-group style-3 " style="margin-bottom: 4px; margin-left: 244px; bottom: 368px; position: relative;">
                                Remark: <br /><textarea id="txt" name="remark" cols="35" style="height: 80px;" rows="10" required><?php print $remark; ?></textarea>
                            </div>



                            <input class="btn btn-lg btn-success btn-block" name="update" type="submit" value="update" style="width: 100px; margin-left: 436px; bottom: 360px; position: relative;">






                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>





