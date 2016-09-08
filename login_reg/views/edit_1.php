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
                        
                        <?php
 
      foreach ($editdata as $data) { 
    ?>

<form method = "post" action ="<?php echo site_url('Form/updateData/'.$data['id'].''); ?>">
    <div class="form-group style-3">
	ID: <br /><input type="text" name = "id" value="<?php echo $data['id']; ?>">
     </div> 
    <div class="form-group style-3">
	Name: <br /><input type="text" name = "name" value="<?php echo $data['name']; ?>">
     </div>
     <div class="form-group style-3">
	Email: <br /><input type="text" name = "email" value="<?php echo $data['email']; ?>">
     </div>
    <div class="form-group style-3">
	Contact: <br /><input type="text" name = "contact" value="<?php echo $data['contact']; ?>">
    </div>
    <div class="form-group style-3">
	Address: <br /><input type="text" name = "address" value="<?php echo $data['address']; ?>" >
    </div>
	<input type="submit" value="submit">
</form>
    
                        <?php
        }
     ?>

         </div>
                </div>
            </div>
        </div>

    </div>
			

   


    </body>
</html>

