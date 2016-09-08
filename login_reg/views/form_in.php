<html>
    <head>
        
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />
        
    </head>
    <body>
			
    <div class="container">

        <div class="col-md-4 col-md-offset-4">
            <div class="row vertical-offset">

                <div class="panel panel-default" >
                    <div class="panel-heading">
                    
                        <h3 class="panel-title">Travel Type: <b>AIRPORT DROP</b></h3>
                    </div>
                    <div class="panel-body">

<form method = "post" action = "<?php echo site_url('Form/index');?>">
     <div class="form-group style-3">
	Name: <br /><input type="text" name = "name" >
     </div>
     <div class="form-group style-3">
	Email: <br /><input type="text" name = "email" >
     </div>
    <div class="form-group style-3">
	Contact: <br /><input type="text" name = "contact" >
    </div>
    <div class="form-group style-3">
	Address: <br /><input type="text" name = "address" >
    </div>
	<input type="submit" value="submit">
</form>
    

         </div>
                </div>
            </div>
        </div>

    </div>
			

   


    </body>
</html>

