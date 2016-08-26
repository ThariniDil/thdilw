<?php
include './config.php';
?>


<?php
//$date = 0;

if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];



//selecting data associated with this particular id
    $result = mysqli_query($con, "SELECT `id`, `name`, `address`, `phone_no` FROM `users` WHERE id=$id");


    while ($record = mysqli_fetch_array($result)) {
        $id = $record['id'];
        $name = $record['name'];
        $address = $record['address'];
        $phoneno = $record['phone_no'];
      
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];

        $name = $_POST['name'];
        $address = $_POST['address'];
        $phoneno = $_POST['phone_no'];
       
//var_dump($_POST);
//die(); 
        //updating the table
        mysqli_query($con, "UPDATE `users` SET id='$id',name='$name',address='$address',phone_no='$phoneno' WHERE id='$id'");
        header("Location: view.php");
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

        width: 831px;
        margin-left: 40px;

    }
    .panel-body {

        height: 399px;
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



<body>

    <a href="packagetable.php">Home</a>
    <br/><br/>

    <div class="container">

        <div class="col-md-4 col-md-offset-4">
            <div class="row vertical-offset" style="width: 235%;">

                <div class="panel panel-default" >
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>EDIT FORM</b></h3>
                    </div>
                    <div class="panel-body">
                       
  <form id="form" action="#" method="post">


                              <fieldset>



                                       <div class="form-group style-3" style="margin-left: 14px; position: relative; bottom: -40px;">
                                            ID: <br /><input class="form-control" name="id" type="text" value="<?php echo $id; ?>" style="width: 264px;">
			    		</div>

                                        <div class="form-group style-3" style="margin-left: 14px; position: relative; bottom: -40px;">
                                            Name: <br /><input class="form-control" name="name" type="text" value="<?php echo $name; ?>" style="width: 264px;">
			    		</div>
			    	  	
			    		<div class="form-group style-3" style="margin-left: 14px; position: relative; bottom: -93px;">
                                            Address: <br /><input class="form-control" name="address" type="text" value="<?php echo $address; ?>" style="width: 264px;" >
			    		</div>
                                        
                                        <div class="form-group style-3" style="margin-left: 14px; position: relative; bottom: 33px;">
                                            Phone No: <br /><input class="form-control" name="phoneno" type="text" value="<?php echo $phoneno; ?>" style="width: 264px;" >
			    		</div>
                            <input class="btn btn-lg btn-success btn-block" name="update" type="submit" value="update" style="width: 100px; margin-left: 423px; bottom: 252px; position: relative;">




                         </fieldset>





                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>









