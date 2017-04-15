<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'123');
define('DB_NAME', 'example');

class DB_con
{
 function __construct()
 {
  $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  mysql_select_db(DB_NAME, $conn);
 }
 
 public function insert($fname,$lname,$city)
 {
  $res = mysql_query("INSERT users(first_name,last_name,user_city) VALUES('$fname','$lname','$city')");
  return $res;
 }
 
 public function select()
 {
  $res=mysql_query("SELECT `first_name` FROM `users`");
  return $res;
 }
}
?>
