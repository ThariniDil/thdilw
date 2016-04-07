<?php

include './config.php';

$email = trim(mysql_escape_string($_GET['email']));

$key = trim(mysqli_escape_string($_GET['key']));

$result_verified_email = mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$email'AND`active`=1");

if(mysqli_num_rows($result_verified_email) == 1){
    
    echo'<div>Your Account already exists. Please <a href="login.html">Login Here</a></div>';
    
    
}else {
    
    if(isset($email) && isset($key)) {
        
        mysqli_query($con, "UPDATE `users` SET `active`=1 WHERE `email`='".$email."' AND `hash`='".$key."'");
        
        if(mysqli_affected_rows($con) == 1){
            
            	echo '<div>Your Account has been activated. Please <a href="in.php">Login Here</a></div>';
            
        }else{
            
            echo '<div>Account couldnot be activated.</div>';

            
        }
        
    }
    
    
    mysqli_close($con);
    
}

