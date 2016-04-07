<?php
include './config.php';

if(isset($_POST['submit'])) {
    
    
    $username = $_POST['username'];
    $passwords = $_POST['password'];
    $name = $_POST['name'];
    $passwordagain = $_POST['passwordagain'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $sex = $_POST['sex'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
    
    $password = md5($passwords);
    $password2 = md5($passwordagain);
   
    
    var_dump($_POST);
    
   
    
    $verified_email = mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$email' AND `active` =1" );
    
    //var_dump($verified_email);
    
    if(!$verified_email){
        
        echo'System error';
    }
    if(mysqli_num_rows($verified_email) == 0) {
        
        //Generate a unique code
        
        $hash = md5(uniqid(rand(), true));
        $created_user = mysqli_query($con, "INSERT INTO `users`(`username`, `password`, `name`, `password_again`, `address`, `phone_no`, `date`, `month`, `year`, `sex`, `email`, `image`, `hash`) VALUES ('{$username}','{$password}','{$name}','{$password2}','{$address}','{$phoneno}','{$day}','{$month}','{$year}','{$sex}','{$email}','{$image}','{$hash}')");
        
        if(!$created_user) {
            
            echo'Query failed';
            
        }
        
        if(mysqli_affected_rows($con) == 1){ //if the insert query was successful
            
           // send e-mail to ...
            
                $subject = 'Activate your email';
            
                $headers = "From: thariniwp@yahoo.com \r\n";
                $headers .= "MIME-Version: 1.0\r\n";
 
                $message = " To activate your account, please click on this link:\n\n";

                $message .= WEBSITE_URL . '/verify.php?email=' . urlencode($email) . "&key=$hash";
                mail($email, $subject, $headers, $message);
            
           // var_dump($sentmail);
            
            
            echo'<div>A confirmation email has been sent to <b>'. $email .'</b> Please click on the Activate Button to Activate your account</div>';
            

            
            
            
        } else { // If it did not run OK.
            
            echo'<div>You could not be registered due to a system error. We apologize for any inconvenience.</div>';
            
            
            
            
        }
        
    }
     else{
         
         echo'<div>Email already registered</div>';
     }
    
}
