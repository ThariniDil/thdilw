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
        
       if($result){
// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to=$email;

// Your subject
$subject="Your confirmation link here";

// From
$header="from: your name <your email>";

// Your message
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://www.yourweb.com/confirmation.php?passkey=$confirm_code";

// send email
$sentmail = mail($to,$subject,$message,$header);
}

// if not found 
else {
echo "Not found your email in our database";
}


?>
            
         
