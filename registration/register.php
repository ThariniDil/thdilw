<?php
include './config.php';

if(isset($_POST['submit'])) {
    
    
   
    $name = $_POST['name'];
    $address= $_POST['address'];
    $phoneno = $_POST['phoneno'];
   
    
  
   
    
   // var_dump($_POST);
    



    mysqli_query($con, "INSERT INTO `users`(`name`, `address`, `phone_no`) VALUES ('{$name}','{$address}','{$phoneno}')");
}


  header("Location: rg.php");


?>
            
          
