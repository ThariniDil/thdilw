<?php
$con = mysqli_connect("localhost", "root", "123" , "alt1");
            if(mysqli_errno($con)) {
                die("can not connect:". mysqli_error());
            } 
            
            else {
                
                echo "ok";
                
            }
