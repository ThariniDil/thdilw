<?php
session_start();
if (isset($_POST['username'])) {
       
    include_once("dbConnect.php");
	
	// Set the posted data from the form into local variables
	$usname = strip_tags($_POST['username']);
	$paswd = strip_tags($_POST['password']);
        
          $usname = mysqli_real_escape_string($dbCon, $usname);
          $paswd = mysqli_real_escape_string($dbCon, $paswd );
          
          $paswd = md5($paswd); //using md5 just for testing purposes
          
          $sql = "SELECT id, username, password FROM users WHERE username = '$usname' AND activated = '1' LIMIT 1";
          $query = mysqli_query($dbCon, $sql);
          $row = mysqli_fetch_row($query);
          $uid = $row[0];
          $dbUsname = $row[1];
          $dbPassword = $row[2];
         
	
	// Check if the username and the password they entered was correct
	if ($usname == $dbUsname && $paswd == $dbPassword) {
		// Set session 
		$_SESSION['username'] = $usname;
		$_SESSION['id'] = $uid;
		// Now direct to users feed
		header("Location: user.php");
	} else {
		echo "<h2>Oops that username or password combination was incorrect.
		<br /> Please try again.</h2>";
	}
	
}
?>







<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap.css"/>

<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->


<script type="text/javascript">
  $(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'), 
        .5, 
        { css: 
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});
</script>


<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
                    <h2 class="panel-center-heading">Aiport Travels</h2>
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" id="form" action="index.php" method="post" enctype="multipart/form-data">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Username" name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
