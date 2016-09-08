<!DOCTYPE html>
 <html>

 <head>

	<title></title>

<style type="text/css">
p{
	
   
	font-size: small;

}
.a1 {
    color: #03A9F4;
    font-family:sans-serif;
    margin-right:5px	
}		

.p3{
	color:gray;
	font-family:sans-serif;
	padding-left:3px;
	text-align:justify;


}

a {
    text-decoration: none;
    color: gray;
    font-family:sans-serif;
}

nav {
	color:gray;
	font-size: 16px;
	font-weight: 600;
	text-transform: uppercase;
        padding-top: 5px;
	font-family:sans-serif;
}

.nav{
    padding-right: 55px;
    padding-left: 55px;
    display: inline-block;
    height: 50px;
    padding-top: 20px;
    font-family:sans-serif;
}

.image{

	position:relative;
	width:100%;
	lenght:100px;


}
.image-txt{

    position: absolute;
    top: 61px;
    width: 277px;
    margin-left: 66px;
    font-weight: bold;
    color: white;
    font-family: sans-serif;
  }
 input{
 margin-bottom:10px; 
 font-family:sans-serif;
  padding-right: 20px; 
  padding-left: 20px;
 }


	
input#input3{
	 
         background-color:rgb(20, 121, 202);
         color: #f7ecec;
 	
        
}
input#input4{
	
	 background-color:rgb(20, 121, 202);
      	color: #f7ecec;
	

}


input[type="button"],input[type="button"]{
  -moz-border-radius: 15px;
 -webkit-border-radius: 15px;
  font-family:corbal,sans-serif;
  padding-right: 20px; 
  padding-left: 
 background-color:rgb(20, 121, 202);
  color: #f7ecec;
} 
	
	/*blue*/    

label for{
    font-family:corbel,sans-serif;
    
        
}
	
li{
list-style-type:none;
font-family:sans-serif;
}

</style>
</head>
<body background="body.jpg" style="background-repeat: ">
<div>
<nav>
		<a class="nav" href="/homepage/">Home Page</a>

		<a class="nav" href="/about us/">About Us</a>

		<a class="nav" href="/our articles/">Our Articles</a>

		<a class="nav" href="/contact us/">Contact Us</a>

		<a class="nav" href="/sitemap/">Sitemap</a>
	
</nav>
</div>
<table style="
    width:60px;
    padding-left: 44px;
    padding-right: 49px;
">

<div>
<tr>
<td style="padding-left: 30px; padding-bottom: 0px;padding-right: 30px;">
<h2 style="font-family:sans-serif;padding-left: 35px;padding-top: 0px;">Categories</h2>

	<p style="color:#03A9F4;font-family:sans-serif;padding-left: 50px;font-weight:600">Programs</p>
	<hr style="margin-right: -73px;margin-left: 49px;">
	<p style="color:#03A9F4;font-family:sans-serif;padding-left: 50px;font-weight:600">Student Info</p>
	<hr style="margin-right: -73px;margin-left: 49px;">
	<p style="color:#03A9F4;font-family:sans-serif;padding-left: 50px;font-weight:600">Teachers</p>
	<hr style="margin-right: -73px;margin-left: 49px;">
	<p style="color:#03A9F4;font-family:sans-serif;padding-left: 50px;font-weight:600">Descriptions</p>
	<hr style="margin-right: -73px;margin-left: 49px;">
	<p style="color:#03A9F4;font-family:sans-serif;padding-left: 50px;font-weight:600">Administrators</p>
	<hr style="margin-right: -73px;margin-left: 49px;">
	<p style="color:#03A9F4;font-family:sans-serif;padding-left: 50px;font-weight:600">Basic Information</p>
	<hr style="margin-right: -73px;margin-left: 49px;">
	<p style="color:#03A9F4;font-family:sans-serif;padding-left: 50px;font-weight:600">Vacancies</p>
	<hr style="margin-right: -73px;margin-left: 49px;">
	<p style="color:#03A9F4;font-family:sans-serif;padding-left: 50px;font-weight:600">Calender</p>
	<hr style="margin-right: -73px;margin-left: 49px;">





</td>
<td style="padding-top: 51px;padding-left: 40px;margin-top:2px;">
<div class="image">
<img src="banner-bg.jpg" alt="" class="position: relative;" style="width: 681px;height:400px;padding-bottom:85px;">
<h1 class="image-txt">Professional Online Education Since 1992</h1><br/>

</div>
</td>

<tr>
<td>

<tr>
<td>	
<h3 style="font-family:sans-serif;">Fresh News</h3>
	<ul>
	<li><h6>August 01,2014</h6></li>
		<p><b><h5 style ="font-color:#2196f3"><a class="a1" href="/mid semister exam/">Mid Semester Exam</a></h5></b></p>
		<p class="p3">Mid semester examination will be commenced from 11<sup>th</sup> August 2014.</p>

	<li><h6>July 12,2014</h6></li>
		<p><b><h5 style="font-color:#2196f3"><a class="a1" href="/Ita course assesment/">ITA Course Assesments</a></h5></b></p>
		<p class="p3">A project will be assigned as a group work of maximum 6 members for a group.</p>

	<li><h6>June 23,2014</h6></li>
		<p><b><h5 style="font-color:#2196f3"><a class="a1" href="/start of new semester/">Start of new Semester</a></h5></b></p>
		<p class="p3">Lectures, tutorial & practical sessions will be starting from the first week itself.</p>
</td>
<td>
<div style="padding-left: 75px;padding-bottom: 80px;">

<center style="position: relative; bottom: -22px;">

<?php
if(isset($_POST["fname"]) && isset($_POST["lname"]) &&
isset($_POST["gender"]) && isset($_POST["dateofbirth"]) && isset($_POST["username"]) && isset($_POST["pd1"]) && isset($_POST["pd2"]) && isset($_POST["country"]) && isset($_POST["comm"]))
{
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$dateofbirth = $_POST["dateofbirth"];
$username = $_POST["username"];
$pd1 = $_POST["pd1"];
$pd2 = $_POST["pd2"];
$country = $_POST["country"];
$comm = $_POST["comm"];
}
else
{
$error = "One or more fields are not filled";
echo $error;
}

//var_dump $fname;
?>


<form >
<p>First Name : <?php echo $fname; ?></p>


<p>Last name : <?php echo $lname; ?></p>


<p>Gender : <?php echo $gender; ?></p>



<p>Date of Birth : <?php echo $dateofbirth; ?></p>
 


<p>Username : <?php echo $username; ?></p>

<p>Password : <?php echo $pd1; ?></p>

<p>Password Again: <?php echo $pd2; ?></p>

<p>Country : <?php echo $country; ?></p>

<p>Communication via : <?php echo $comm;?></p>


</form>
</center>
</div>

<table>

<tr>
 

<tr>
	<td style="padding-left: 234px;"><p align="justify"><font style="margin-left: -104px; position: relative; bottom: -94px; color:gray;display:block;font-family:sans-serif;margin-left:40px">Copyright© Sri Lanka Institute of Information Technology,2014-All Rights Reserved</p></td>
</tr>

</table>

</body>


</html>
