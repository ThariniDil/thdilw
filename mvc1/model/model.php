
<?php

 Class Model{

  public function Model()
  {
   $con = mysql_connect("localhost","root","123") or die('Not connected to Database<br>' . mysql_error());
   mysql_select_db("mvc1",$con) or die('Not Select Database' . mysql_error());
  }

  public function insert_data()
  {
   if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $qry = "INSERT INTO `users`(`name`, `age`, `city`) VALUES ('$name','$age','$city')";
    $result = mysql_query($qry);
    if ($result) {
     return "Insert Data Successfully.";
    }
    else
    {
     return "Error...! Not Inserted.";
    }
   }
   else
   {
    return "";
   }
  }
  
  public function select_data() 
          
  {
      
      $qry = "SELECT * FROM `users`";
      $result = mysql_query($con,$qry);
      return $result;
      
      
  }
  
 }
?>