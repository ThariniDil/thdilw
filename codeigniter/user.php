<?php
session_start();

if (isset($_SESSION['id'])) {
    //put stored session varaibles into local PHP variable
    $uid = $_SESSION['id'];
    $usname = $_SESSION['username'];
    $result = "Test variables: <br /> Username: ".$usname. "<br /> Id: ".$uid;
    
}else {
    $result = "You are not logged in yet";
    
}
?>
<!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title><?php echo $usname; ?> - Test Site</title>
    </head>
        </html>



<?php
echo $result;
?> 

