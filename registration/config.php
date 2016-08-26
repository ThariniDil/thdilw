<?php

$con = mysqli_connect("localhost", "root", "123", "student");
if (mysqli_errno($con)) {
    die("can not connect:" . mysqli_error());
} 
